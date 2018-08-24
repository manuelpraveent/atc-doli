<?php
/* Copyright (C) 2013-2017 Laurent Destailleur <eldy@users.sourceforge.net>
 * Copyright (C) 2014      Marcos García       <marcosgdf@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 *	\file       htdocs/opensurvey/list.php
 *	\ingroup    opensurvey
 *	\brief      Page to list surveys
 */

require_once('../main.inc.php');
require_once(DOL_DOCUMENT_ROOT."/core/lib/admin.lib.php");
require_once(DOL_DOCUMENT_ROOT."/core/lib/files.lib.php");
require_once(DOL_DOCUMENT_ROOT."/opensurvey/class/opensurveysondage.class.php");

// Security check
if (!$user->rights->opensurvey->read) accessforbidden();

$action=GETPOST('action','aZ09');
$id=GETPOST('id','alpha');
$numsondage= $id;
$search_ref = GETPOST('search_ref', 'alpha');
$search_title = GETPOST('search_title', 'alpha');
$search_status = GETPOST('search_status', 'alpha');

$sortfield = GETPOST("sortfield",'alpha');
$sortorder = GETPOST("sortorder",'alpha');
$limit = GETPOST('limit')?GETPOST('limit','int'):$conf->liste_limit;
$page = GETPOST("page",'int');
if (empty($page) || $page == -1) { $page = 0; }     // If $page is not defined, or '' or -1
$offset = $limit * $page;
$pageprev = $page - 1;
$pagenext = $page + 1;
if (! $sortfield) $sortfield="p.date_fin";
if (! $sortorder) $sortorder="DESC";
if ($page < 0) {
	$page = 0;
}

$langs->load("opensurvey");

/*
 * Actions
 */

if (GETPOST('button_removefilter_x','alpha') || GETPOST('button_removefilter.x','alpha') || GETPOST('button_removefilter','alpha')) // All tests are required to be compatible with all browsers
{
	$search_status='';
	$search_title='';
	$search_ref='';
}


/*
 * View
 */

$form=new Form($db);
$opensurvey_static = new Opensurveysondage($db);

$now = dol_now();

llxHeader('', $langs->trans("OpenSurveyArea"));

$param='';
$fieldtosortuser=empty($conf->global->MAIN_FIRSTNAME_NAME_POSITION)?'firstname':'lastname';

print load_fiche_titre($langs->trans("OpenSurveyArea"));

// List of surveys into database

print '<form action="'.$_SERVER["PHP_SELF"].'" method="post" name="formulaire">';
print '<input type="hidden" name="token" value="'.$_SESSION['newtoken'].'">';
print '<input type="hidden" name="action" value="list">';
print '<input type="hidden" name="sortfield" value="'.$sortfield.'">';
print '<input type="hidden" name="sortorder" value="'.$sortorder.'">';
print '<input type="hidden" name="page" value="'.$page.'">';

$moreforfilter = '';

print '<div class="div-table-responsive">';
print '<table class="tagtable liste'.($moreforfilter?" listwithfilterbefore":"").'">'."\n";

print '<tr class="liste_titre_filter">';
print '<td class="liste_titre"><input type="text" class="maxwidth100" name="search_ref" value="'.dol_escape_htmltag($search_ref).'"></td>';
print '<td class="liste_titre"><input type="text" class="maxwidth100onsmartphone" name="search_title" value="'.dol_escape_htmltag($search_title).'"></td>';
print '<td class="liste_titre"></td>';
print '<td class="liste_titre"></td>';
print '<td class="liste_titre"></td>';
print '<td class="liste_titre"></td>';
$arraystatus=array('-1'=>'&nbsp;','0'=>$langs->trans("Draft"),'1'=>$langs->trans("Opened"),'2'=>$langs->trans("Closed"));
print '<td class="liste_titre" align="center">'. $form->selectarray('search_status', $arraystatus, $search_status).'</td>';
print '<td class="liste_titre" align="right">';
$searchpicto=$form->showFilterAndCheckAddButtons(0);
print $searchpicto;
print '</td>';
print '</tr>'."\n";

print '<tr class="liste_titre">';
print_liste_field_titre("Ref", $_SERVER["PHP_SELF"], "p.id_sondage", $param,"","",$sortfield,$sortorder);
print_liste_field_titre("Title", $_SERVER["PHP_SELF"], "p.titre", $param,"","",$sortfield,$sortorder);
print_liste_field_titre("Type", $_SERVER["PHP_SELF"], "p.format", $param,"","",$sortfield,$sortorder);
print_liste_field_titre("Author", $_SERVER["PHP_SELF"], "u.".$fieldtosortuser, $param,"","",$sortfield,$sortorder);
print_liste_field_titre("NbOfVoters", $_SERVER["PHP_SELF"], "", $param,"",'align="right"',$sortfield,$sortorder);
print_liste_field_titre("ExpireDate", $_SERVER["PHP_SELF"], "p.date_fin", $param,"",'align="center"',$sortfield,$sortorder);
print_liste_field_titre("Status", $_SERVER["PHP_SELF"], "p.status", $param,"",'align="center"',$sortfield,$sortorder);
print_liste_field_titre('');
print '</tr>'."\n";

$sql = "SELECT p.id_sondage, p.fk_user_creat, p.format, p.date_fin, p.status, p.titre, p.nom_admin,";
$sql.= " u.login, u.firstname, u.lastname";
$sql.= " FROM ".MAIN_DB_PREFIX."opensurvey_sondage as p";
$sql.= " LEFT JOIN ".MAIN_DB_PREFIX."user u ON u.rowid = p.fk_user_creat";
// Count total nb of records
$nbtotalofrecords = '';
if (empty($conf->global->MAIN_DISABLE_FULL_SCANLIST))
{
	$result = $db->query($sql);
	$nbtotalofrecords = $db->num_rows($result);
}
$sql.= " WHERE p.entity IN (".getEntity('survey').")";
if ($search_status != '-1' && $search_status != '') $sql.=natural_search("p.status", $search_status, 2);
if ($search_expired == 'expired') $sql.=" AND p.date_fin < '".$db->idate($now)."'";
if ($search_expired == 'opened')  $sql.=" AND p.date_fin >= '".$db->idate($now)."'";
if ($search_ref) $sql.=natural_search("p.id_sondage", $search_ref);
if ($search_title) $sql.=natural_search("p.titre", $search_title);
$sql.= $db->order($sortfield,$sortorder);

// Count total nb of records
$nbtotalofrecords = '';
if (empty($conf->global->MAIN_DISABLE_FULL_SCANLIST))
{
    $result = $db->query($sql);
    $nbtotalofrecords = $db->num_rows($result);
}

$sql.= $db->plimit($limit+1, $offset);

$resql=$db->query($sql);
if (! $resql) dol_print_error($db);

$num=$db->num_rows($resql);

$i = 0; $var = true;
while ($i < min($num,$limit))
{
	$obj=$db->fetch_object($resql);

	$sql2='select COUNT(*) as nb from '.MAIN_DB_PREFIX."opensurvey_user_studs where id_sondage='".$db->escape($obj->id_sondage)."'";
	$resql2=$db->query($sql2);
	if ($resql2)
	{
		$obj2=$db->fetch_object($resql2);
		$nbuser=$obj2->nb;
	}
	else dol_print_error($db);

	$opensurvey_static->id=$obj->id_sondage;
	$opensurvey_static->ref=$obj->id_sondage;
	$opensurvey_static->title=$obj->titre;
	$opensurvey_static->status=$obj->status;
	$opensurvey_static->date_fin=$db->jdate($obj->date_fin);

	print '<tr>';

	// Ref
	print '<td>';
	print $opensurvey_static->getNomUrl(1);
	print '</td>';

	// Title
	print '<td>'.dol_htmlentities($obj->titre).'</td>';

	// Type
	print '<td>';
	$type=($obj->format=='A')?'classic':'date';
	print img_picto('',dol_buildpath('/opensurvey/img/'.($type == 'classic'?'chart-32.png':'calendar-32.png'),1),'width="16"',1);
	print ' '.$langs->trans($type=='classic'?"TypeClassic":"TypeDate");
	print '</td><td>';

	// Author
	if ($obj->fk_user_creat) {
		$userstatic = new User($db);
		$userstatic->id = $obj->fk_user_creat;
		$userstatic->firstname = $obj->firstname;
		$userstatic->lastname = $obj->lastname;
		$userstatic->login = $userstatic->getFullName($langs, 0, -1, 48);

		print $userstatic->getLoginUrl(1);
	} else {
		print dol_htmlentities($obj->nom_admin);
	}

	print '</td>';

	// Nb of voters
	print'<td align="right">'.$nbuser.'</td>'."\n";

	print '<td align="center">'.dol_print_date($db->jdate($obj->date_fin),'day');
	if ($db->jdate($obj->date_fin) < $now && $obj->status == Opensurveysondage::STATUS_VALIDATED) { print img_warning($langs->trans("Expired")); }
	print '</td>';

	print'<td align="center">'.$opensurvey_static->getLibStatut(5).'</td>'."\n";

	print'<td align="center"></td>'."\n";

	print '</tr>'."\n";
	$i++;
}

// If no record found
if ($num == 0)
{
    $colspan=8;
    //foreach($arrayfields as $key => $val) { if (! empty($val['checked'])) $colspan++; }
    print '<tr><td colspan="'.$colspan.'" class="opacitymedium">'.$langs->trans("NoRecordFound").'</td></tr>';
}

print '</table>'."\n";
print '</div>';
print '</form>';

llxFooter();

$db->close();
