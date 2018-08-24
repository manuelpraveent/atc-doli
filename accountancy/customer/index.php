<?php
/* Copyright (C) 2013       Olivier Geffroy		<jeff@jeffinfo.com>
 * Copyright (C) 2013-2014  Florian Henry		<florian.henry@open-concept.pro>
 * Copyright (C) 2013-2017  Alexandre Spangaro	<aspangaro@zendsi.com>
 * Copyright (C) 2014       Juanjo Menent		<jmenent@2byte.es>
 * Copyright (C) 2015       Jean-François Ferry	<jfefe@aternatik.fr>
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
 *
 */

/**
 * \file 	htdocs/accountancy/customer/index.php
 * \ingroup Advanced accountancy
 * \brief 	Home customer journalization page
 */

require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT . '/core/lib/date.lib.php';
require_once DOL_DOCUMENT_ROOT . '/core/lib/accounting.lib.php';
require_once DOL_DOCUMENT_ROOT . '/compta/facture/class/facture.class.php';

// Langs
$langs->load("compta");
$langs->load("bills");
$langs->load("other");
$langs->load("main");
$langs->load("accountancy");

// Security check
if (empty($conf->accounting->enabled)) {
	accessforbidden();
}
if ($user->societe_id > 0)
	accessforbidden();
if (! $user->rights->accounting->bind->write)
	accessforbidden();


$month_start= ($conf->global->SOCIETE_FISCAL_MONTH_START?($conf->global->SOCIETE_FISCAL_MONTH_START):1);
if (GETPOST("year",'int')) $year_start = GETPOST("year",'int');
else
{
	$year_start = dol_print_date(dol_now(), '%Y');
	if (dol_print_date(dol_now(), '%m') < $month_start) $year_start--;	// If current month is lower that starting fiscal month, we start last year
}
$year_end = $year_start + 1;
$month_end = $month_start - 1;
if ($month_end < 1)
{
	$month_end = 12;
	$year_end--;
}
$search_date_start = dol_mktime(0, 0, 0, $month_start, 1, $year_start);
$search_date_end = dol_get_last_day($year_end, $month_end);
$year_current = $year_start;

// Validate History
$action = GETPOST('action','aZ09');


/*
 * Actions
 */

if ($action == 'clean' || $action == 'validatehistory')
{
	// Clean database
	$db->begin();
	$sql1 = "UPDATE " . MAIN_DB_PREFIX . "facturedet as fd";
	$sql1 .= " SET fk_code_ventilation = 0";
	$sql1 .= ' WHERE fd.fk_code_ventilation NOT IN';
	$sql1 .= '	(SELECT accnt.rowid ';
	$sql1 .= '	FROM ' . MAIN_DB_PREFIX . 'accounting_account as accnt';
	$sql1 .= '	INNER JOIN ' . MAIN_DB_PREFIX . 'accounting_system as syst';
	$sql1 .= '	ON accnt.fk_pcg_version = syst.pcg_version AND syst.rowid=' . $conf->global->CHARTOFACCOUNTS . ' AND accnt.entity = '.$conf->entity.')';
	$sql1 .= ' AND fd.fk_facture IN (SELECT rowid FROM ' . MAIN_DB_PREFIX . 'facture WHERE entity = '.$conf->entity.')';
	$sql1 .= ' AND fk_code_ventilation <> 0';

	dol_syslog("htdocs/accountancy/customer/index.php fixaccountancycode", LOG_DEBUG);
	$resql1 = $db->query($sql1);
	if (! $resql1) {
		$error ++;
		$db->rollback();
		setEventMessage($db->lasterror(), 'errors');
	} else {
		$db->commit();
	}
	// End clean database
}

if ($action == 'validatehistory') {

	$error = 0;
	$db->begin();

	// Now make the binding. Bind automatically only for product with a dedicated account that exists into chart of account, others need a manual bind
	if ($db->type == 'pgsql') {
		$sql1 = "UPDATE " . MAIN_DB_PREFIX . "facturedet";
		$sql1 .= " SET fk_code_ventilation = accnt.rowid";
		$sql1 .= " FROM " . MAIN_DB_PREFIX . "product as p, " . MAIN_DB_PREFIX . "accounting_account as accnt , " . MAIN_DB_PREFIX . "accounting_system as syst";
		$sql1 .= " WHERE " . MAIN_DB_PREFIX . "facturedet.fk_product = p.rowid  AND accnt.fk_pcg_version = syst.pcg_version AND syst.rowid=" . $conf->global->CHARTOFACCOUNTS.' AND accnt.entity = '.$conf->entity;
		$sql1 .= " AND accnt.active = 1 AND p.accountancy_code_sell=accnt.account_number";
		$sql1 .= " AND " . MAIN_DB_PREFIX . "facturedet.fk_code_ventilation = 0";
	} else {
		$sql1 = "UPDATE " . MAIN_DB_PREFIX . "facturedet as fd, " . MAIN_DB_PREFIX . "product as p, " . MAIN_DB_PREFIX . "accounting_account as accnt , " . MAIN_DB_PREFIX . "accounting_system as syst";
		$sql1 .= " SET fk_code_ventilation = accnt.rowid";
		$sql1 .= " WHERE fd.fk_product = p.rowid  AND accnt.fk_pcg_version = syst.pcg_version AND syst.rowid=" . $conf->global->CHARTOFACCOUNTS.' AND accnt.entity = '.$conf->entity;
		$sql1 .= " AND accnt.active = 1 AND p.accountancy_code_sell=accnt.account_number";
		$sql1 .= " AND fd.fk_code_ventilation = 0";
	}

	dol_syslog('htdocs/accountancy/customer/index.php');

	$resql1 = $db->query($sql1);
	if (! $resql1) {
		$error ++;
		$db->rollback();
		setEventMessages($db->lasterror(), null, 'errors');
	} else {
		$db->commit();
		setEventMessages($langs->trans('AutomaticBindingDone'), null, 'mesgs');
	}
}


/*
 * View
 */

llxHeader('', $langs->trans("CustomersVentilation"));

$textprevyear = '<a href="' . $_SERVER["PHP_SELF"] . '?year=' . ($year_current - 1) . '">' . img_previous() . '</a>';
$textnextyear = '&nbsp;<a href="' . $_SERVER["PHP_SELF"] . '?year=' . ($year_current + 1) . '">' . img_next() . '</a>';

print load_fiche_titre($langs->trans("CustomersVentilation") . " " . $textprevyear . " " . $langs->trans("Year") . " " . $year_start . " " . $textnextyear, '', 'title_accountancy');

print $langs->trans("DescVentilCustomer") . '<br>';
print $langs->trans("DescVentilMore", $langs->transnoentitiesnoconv("ValidateHistory"), $langs->transnoentitiesnoconv("ToBind")) . '<br>';
print '<br>';


$y = $year_current;

$buttonbind = '<a class="butAction" href="' . $_SERVER['PHP_SELF'] . '?year=' . $year_current . '&action=validatehistory">' . $langs->trans("ValidateHistory") . '</a>';


print_fiche_titre($langs->trans("OverviewOfAmountOfLinesNotBound"), $buttonbind, '');

print '<div class="div-table-responsive-no-min">';
print '<table class="noborder" width="100%">';
print '<tr class="liste_titre"><td width="200">' . $langs->trans("Account") . '</td>';
print '<td width="200" align="left">' . $langs->trans("Label") . '</td>';
for($i = 1; $i <= 12; $i ++) {
	$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
	if ($j > 12) $j-=12;
	print '<td width="60" align="right">' . $langs->trans('MonthShort' . str_pad($j, 2, '0', STR_PAD_LEFT)) . '</td>';
}
print '<td width="60" align="right"><b>' . $langs->trans("Total") . '</b></td></tr>';

$sql = "SELECT " . $db->ifsql('aa.account_number IS NULL', "'tobind'", 'aa.account_number') . " AS codecomptable,";
$sql .= "  " . $db->ifsql('aa.label IS NULL', "'tobind'", 'aa.label') . " AS intitule,";
for($i = 1; $i <= 12; $i ++) {
	$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
	if ($j > 12) $j-=12;
	$sql .= "  SUM(" . $db->ifsql('MONTH(f.datef)=' . $j, 'fd.total_ht', '0') . ") AS month" . str_pad($j, 2, '0', STR_PAD_LEFT) . ",";
}
$sql .= "  SUM(fd.total_ht) as total";
$sql .= " FROM " . MAIN_DB_PREFIX . "facturedet as fd";
$sql .= "  LEFT JOIN " . MAIN_DB_PREFIX . "facture as f ON f.rowid = fd.fk_facture";
$sql .= "  LEFT JOIN " . MAIN_DB_PREFIX . "accounting_account as aa ON aa.rowid = fd.fk_code_ventilation";
$sql .= " WHERE f.datef >= '" . $db->idate($search_date_start) . "'";
$sql .= "  AND f.datef <= '" . $db->idate($search_date_end) . "'";
$sql .= " AND f.fk_statut > 0";
$sql .= " AND f.entity IN (" . getEntity('facture', 0) . ")";   // We don't share object for accountancy
$sql .= " AND aa.account_number IS NULL";
if (! empty($conf->global->FACTURE_DEPOSITS_ARE_JUST_PAYMENTS)) {
	$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_SITUATION . ")";
} else {
	$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_DEPOSIT . "," . Facture::TYPE_SITUATION . ")";
}
$sql .= " GROUP BY fd.fk_code_ventilation,aa.account_number,aa.label";

dol_syslog('htdocs/accountancy/customer/index.php sql=' . $sql, LOG_DEBUG);
$resql = $db->query($sql);
if ($resql) {
	$num = $db->num_rows($resql);

	while ( $row = $db->fetch_row($resql)) {

		print '<tr class="oddeven"><td>';
		if ($row[0] == 'tobind')
		{
			print $langs->trans("Unknown");
		}
		else print length_accountg($row[0]);
		print '</td>';
		print '<td align="left">';
		if ($row[0] == 'tobind')
		{
			print $langs->trans("UseMenuToSetBindindManualy", DOL_URL_ROOT.'/accountancy/customer/list.php?search_year='.$y, $langs->transnoentitiesnoconv("ToBind"));
		}
		else print $row[1];
		print '</td>';
		for($i = 2; $i <= 12; $i ++) {
			print '<td align="right">' . price($row[$i]) . '</td>';
		}
		print '<td align="right">' . price($row[13]) . '</td>';
		print '<td align="right"><b>' . price($row[14]) . '</b></td>';
		print '</tr>';
	}
	$db->free($resql);
} else {
	print $db->lasterror(); // Show last sql error
}
print "</table>\n";
print '</div>';


print '<br>';


print_fiche_titre($langs->trans("OverviewOfAmountOfLinesBound"), '', '');

print '<div class="div-table-responsive-no-min">';
print '<table class="noborder" width="100%">';
print '<tr class="liste_titre"><td width="200">' . $langs->trans("Account") . '</td>';
print '<td width="200" align="left">' . $langs->trans("Label") . '</td>';
for($i = 1; $i <= 12; $i ++) {
	$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
	if ($j > 12) $j-=12;
	print '<td width="60" align="right">' . $langs->trans('MonthShort' . str_pad($j, 2, '0', STR_PAD_LEFT)) . '</td>';
}
print '<td width="60" align="right"><b>' . $langs->trans("Total") . '</b></td></tr>';

$sql = "SELECT " . $db->ifsql('aa.account_number IS NULL', "'tobind'", 'aa.account_number') . " AS codecomptable,";
$sql .= "  " . $db->ifsql('aa.label IS NULL', "'tobind'", 'aa.label') . " AS intitule,";
for($i = 1; $i <= 12; $i ++) {
	$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
	if ($j > 12) $j-=12;
	$sql .= "  SUM(" . $db->ifsql('MONTH(f.datef)=' . $j, 'fd.total_ht', '0') . ") AS month" . str_pad($j, 2, '0', STR_PAD_LEFT) . ",";
}
$sql .= "  SUM(fd.total_ht) as total";
$sql .= " FROM " . MAIN_DB_PREFIX . "facturedet as fd";
$sql .= "  LEFT JOIN " . MAIN_DB_PREFIX . "facture as f ON f.rowid = fd.fk_facture";
$sql .= "  LEFT JOIN " . MAIN_DB_PREFIX . "accounting_account as aa ON aa.rowid = fd.fk_code_ventilation";
$sql .= " WHERE f.datef >= '" . $db->idate($search_date_start) . "'";
$sql .= "  AND f.datef <= '" . $db->idate($search_date_end) . "'";
$sql .= " AND f.entity IN (" . getEntity('facture', 0) . ")";   // We don't share object for accountancy
$sql .= " AND f.fk_statut > 0";
if (! empty($conf->global->FACTURE_DEPOSITS_ARE_JUST_PAYMENTS)) {
	$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_SITUATION . ")";
} else {
	$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_DEPOSIT . "," . Facture::TYPE_SITUATION . ")";
}
$sql .= " AND aa.account_number IS NOT NULL";
$sql .= " GROUP BY fd.fk_code_ventilation,aa.account_number,aa.label";

dol_syslog('htdocs/accountancy/customer/index.php');
$resql = $db->query($sql);
if ($resql) {
	$num = $db->num_rows($resql);

	while ( $row = $db->fetch_row($resql)) {

		print '<tr class="oddeven"><td>';
		if ($row[0] == 'tobind')
		{
			print $langs->trans("Unknown");
		}
		else print length_accountg($row[0]);
		print '</td>';

		print '<td align="left">';
		if ($row[0] == 'tobind')
		{
			print $langs->trans("UseMenuToSetBindindManualy", DOL_URL_ROOT.'/accountancy/customer/list.php?search_year='.$y, $langs->transnoentitiesnoconv("ToBind"));
		}
		else print $row[1];
		print '</td>';

		for($i = 2; $i <= 12; $i++) {
			print '<td align="right">' . price($row[$i]) . '</td>';
		}
		print '<td align="right">' . price($row[13]) . '</td>';
		print '<td align="right"><b>' . price($row[14]) . '</b></td>';
		print '</tr>';
	}
	$db->free($resql);
} else {
	print $db->lasterror(); // Show last sql error
}
print "</table>\n";
print '</div>';


if ($conf->global->MAIN_FEATURES_LEVEL > 0) // This part of code looks strange. Why showing a report that should rely on result of this step ?
{
	print '<br>';
	print '<br>';

	print_fiche_titre($langs->trans("OtherInfo"), '', '');

	print '<div class="div-table-responsive-no-min">';
	print '<table class="noborder" width="100%">';
	print '<tr class="liste_titre"><td width="400" align="left">' . $langs->trans("TotalVente") . '</td>';
	for($i = 1; $i <= 12; $i ++) {
		$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
		if ($j > 12) $j-=12;
		print '<td width="60" align="right">' . $langs->trans('MonthShort' . str_pad($j, 2, '0', STR_PAD_LEFT)) . '</td>';
	}
	print '<td width="60" align="right"><b>' . $langs->trans("Total") . '</b></td></tr>';

	$sql = "SELECT '" . $langs->trans("TotalVente") . "' AS total,";
	for($i = 1; $i <= 12; $i ++) {
		$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
		if ($j > 12) $j-=12;
		$sql .= "  SUM(" . $db->ifsql('MONTH(f.datef)=' . $j, 'fd.total_ht', '0') . ") AS month" . str_pad($j, 2, '0', STR_PAD_LEFT) . ",";
	}
	$sql .= "  SUM(fd.total_ht) as total";
	$sql .= " FROM " . MAIN_DB_PREFIX . "facturedet as fd";
	$sql .= "  LEFT JOIN " . MAIN_DB_PREFIX . "facture as f ON f.rowid = fd.fk_facture";
	$sql .= " WHERE f.datef >= '" . $db->idate($search_date_start) . "'";
	$sql .= "  AND f.datef <= '" . $db->idate($search_date_end) . "'";
	$sql .= " AND f.entity IN (" . getEntity('facture', 0) . ")"; // We don't share object for accountancy
	$sql .= " AND f.fk_statut > 0";
	if (! empty($conf->global->FACTURE_DEPOSITS_ARE_JUST_PAYMENTS)) {
		$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_SITUATION . ")";
	} else {
		$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_DEPOSIT . "," . Facture::TYPE_SITUATION . ")";
	}

	dol_syslog('htdocs/accountancy/customer/index.php');
	$resql = $db->query($sql);
	if ($resql) {
		$num = $db->num_rows($resql);

		while ($row = $db->fetch_row($resql)) {
			print '<tr><td>' . $row[0] . '</td>';
			for($i = 1; $i <= 12; $i ++) {
				print '<td align="right">' . price($row[$i]) . '</td>';
			}
			print '<td align="right"><b>' . price($row[13]) . '</b></td>';
			print '</tr>';
		}
		$db->free($resql);
	} else {
		print $db->lasterror(); // Show last sql error
	}
	print "</table>\n";
	print '</div>';


	if (! empty($conf->margin->enabled)) {
		print "<br>\n";
		print '<div class="div-table-responsive-no-min">';
		print '<table class="noborder" width="100%">';
		print '<tr class="liste_titre"><td width="400">' . $langs->trans("TotalMarge") . '</td>';
		for($i = 1; $i <= 12; $i ++) {
			$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
			if ($j > 12) $j-=12;
			print '<td width="60" align="right">' . $langs->trans('MonthShort' . str_pad($j, 2, '0', STR_PAD_LEFT)) . '</td>';
		}
		print '<td width="60" align="right"><b>' . $langs->trans("Total") . '</b></td></tr>';

		$sql = "SELECT '" . $langs->trans("Vide") . "' AS marge,";
		for($i = 1; $i <= 12; $i ++) {
			$j = $i + ($conf->global->SOCIETE_FISCAL_MONTH_START?$conf->global->SOCIETE_FISCAL_MONTH_START:1) - 1;
			if ($j > 12) $j-=12;
			$sql .= "  SUM(" . $db->ifsql('MONTH(f.datef)=' . $j, '(fd.total_ht-(fd.qty * fd.buy_price_ht))', '0') . ") AS month" . str_pad($j, 2, '0', STR_PAD_LEFT) . ",";
		}
		$sql .= "  SUM((fd.total_ht-(fd.qty * fd.buy_price_ht))) as total";
		$sql .= " FROM " . MAIN_DB_PREFIX . "facturedet as fd";
		$sql .= "  LEFT JOIN " . MAIN_DB_PREFIX . "facture as f ON f.rowid = fd.fk_facture";
		$sql .= " WHERE f.datef >= '" . $db->idate($search_date_start) . "'";
		$sql .= "  AND f.datef <= '" . $db->idate($search_date_end) . "'";
		$sql .= " AND f.entity IN (" . getEntity('facture', 0) . ")";   // We don't share object for accountancy
		$sql .= " AND f.fk_statut > 0";
		if (! empty($conf->global->FACTURE_DEPOSITS_ARE_JUST_PAYMENTS)) {
			$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_SITUATION . ")";
		} else {
			$sql .= " AND f.type IN (" . Facture::TYPE_STANDARD . "," . Facture::TYPE_REPLACEMENT . "," . Facture::TYPE_CREDIT_NOTE . "," . Facture::TYPE_DEPOSIT . "," . Facture::TYPE_SITUATION . ")";
		}

		dol_syslog('htdocs/accountancy/customer/index.php');
		$resql = $db->query($sql);
		if ($resql) {
			$num = $db->num_rows($resql);

			while ($row = $db->fetch_row($resql)) {

				print '<tr><td>' . $row[0] . '</td>';
				for($i = 1; $i <= 12; $i ++) {
					print '<td align="right">' . price(price2num($row[$i])) . '</td>';
				}
				print '<td align="right"><b>' . price(price2num($row[13])) . '</b></td>';
				print '</tr>';
			}
			$db->free($resql);
		} else {
			print $db->lasterror(); // Show last sql error
		}
		print "</table>\n";
		print '</div>';
	}
}


llxFooter();
$db->close();
