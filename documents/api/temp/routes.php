<?php $o = array();

// ** THIS IS AN AUTO GENERATED FILE. DO NOT EDIT MANUALLY ** 

//==================== v1 ====================

$o['v1'] = array();

//==== v1 * ====

$o['v1']['*'] = array (
    'explorer' => 
    array (
        'GET' => 
        array (
            'url' => 'explorer/*',
            'className' => 'Luracast\\Restler\\Explorer',
            'path' => 'explorer',
            'methodName' => 'get',
            'arguments' => 
            array (
            ),
            'defaults' => 
            array (
            ),
            'metadata' => 
            array (
                'description' => 'Serve static files for exploring',
                'longDescription' => 'Serves explorer html, css, and js files',
                'url' => 'GET *',
                'package' => 'Luracast\\Restler',
                'access' => 'hybrid',
                'version' => '3.0.0rc6',
                'scope' => 
                array (
                    '*' => 'Luracast\\Restler\\',
                    'stdClass' => 'stdClass',
                    'Text' => 'Luracast\\Restler\\Data\\Text',
                    'ValidationInfo' => 'Luracast\\Restler\\Data\\ValidationInfo',
                    'Scope' => 'Luracast\\Restler\\Scope',
                ),
                'resourcePath' => 'explorer',
                'classDescription' => 'Class Explorer',
                'param' => 
                array (
                ),
                'return' => 
                array (
                    'type' => 'array',
                ),
            ),
            'accessLevel' => 1,
        ),
    ),
);

//==== v1 explorer/swagger ====

$o['v1']['explorer/swagger'] = array (
    'GET' => 
    array (
        'url' => 'explorer/swagger',
        'className' => 'Luracast\\Restler\\Explorer',
        'path' => 'explorer',
        'methodName' => 'swagger',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => '',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'stdClass',
                'description' => '',
                'children' => 
                array (
                ),
            ),
            'package' => 'Luracast\\Restler',
            'access' => 'hybrid',
            'version' => '3.0.0rc6',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'stdClass' => 'stdClass',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'ValidationInfo' => 'Luracast\\Restler\\Data\\ValidationInfo',
                'Scope' => 'Luracast\\Restler\\Scope',
            ),
            'resourcePath' => 'explorer',
            'classDescription' => 'Class Explorer',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 bankaccounts ====

$o['v1']['bankaccounts'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of accounts.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of account objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'bankaccounts',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create account object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of account',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/index ====

$o['v1']['bankaccounts/index'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of accounts.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of account objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/{n0} ====

$o['v1']['bankaccounts/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts/{id}',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get account by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Account object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'bankaccounts/{id}',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'bankaccounts/{id}',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/{n0}/lines ====

$o['v1']['bankaccounts/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts/{id}/lines',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of lines of the account.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of AccountLine objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET {id}/lines',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'bankaccounts/{id}/lines',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'addLine',
        'arguments' => 
        array (
            'id' => 0,
            'date' => 1,
            'type' => 2,
            'label' => 3,
            'amount' => 4,
            'category' => 5,
            'cheque_number' => 6,
            'cheque_writer' => 7,
            'cheque_bank' => 8,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => 0,
            6 => '',
            7 => '',
            8 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to an account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'date',
                    'description' => 'Payment date (timestamp)',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Payment mode (TYP,VIR,PRE,LIQ,VAD,CB,CHQ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'float',
                    'name' => 'amount',
                    'description' => 'Amount (may be 0)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Amount',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Category',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'cheque_number',
                    'description' => 'Cheque numberl',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Cheque Number',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'cheque_writer',
                    'description' => 'Name of cheque writer',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Cheque Writer',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'cheque_bank',
                    'description' => 'Bank of cheque writer',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Cheque Bank',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of line',
            ),
            'url' => 'POST {id}/lines',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/{n0}/lines/{n1}/links ====

$o['v1']['bankaccounts/{n0}/lines/{n1}/links'] = array (
    'POST' => 
    array (
        'url' => 'bankaccounts/{id}/lines/{line_id}/links',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'addLink',
        'arguments' => 
        array (
            'id' => 0,
            'line_id' => 1,
            'url_id' => 2,
            'url' => 3,
            'label' => 4,
            'type' => 5,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a link to an account line',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'line_id',
                    'description' => 'ID of account line',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Line Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'url_id',
                    'description' => 'ID to set in the URL',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Url Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'url',
                    'description' => 'URL of the link',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'url',
                    ),
                    'label' => 'Url',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of link (\'payment\', \'company\', \'member\', ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of link',
            ),
            'url' => 'POST {id}/lines/{line_id}/links',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0} ====

$o['v1']['contacts/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a contact object',
            'longDescription' => 'Return an array with contact informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contact ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts ====

$o['v1']['contacts'] = array (
    'GET' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contacts',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter contacts of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create contact object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of contact',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/index ====

$o['v1']['contacts/index'] = array (
    'GET' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contacts',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter contacts of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/createUser ====

$o['v1']['contacts/{n0}/createUser'] = array (
    'POST' => 
    array (
        'url' => 'contacts/{id}/createUser',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'createUser',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create an user account object from contact (external user)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of user',
            ),
            'url' => 'POST {id}/createUser',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/categories ====

$o['v1']['contacts/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'contacts/{id}/categories',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0} ====

$o['v1']['contracts/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'contracts/{id}',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a contrat object',
            'longDescription' => 'Return an array with contrat informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contract',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'contracts/{id}',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update contract general fields (won\'t touch lines of contract)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contrat to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contracts/{id}',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contract ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts ====

$o['v1']['contracts'] = array (
    'GET' => 
    array (
        'url' => 'contracts',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contracts',
            'longDescription' => 'Get a list of contracts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter contracts of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contract objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'contracts',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create contract object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of contrat',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/index ====

$o['v1']['contracts/index'] = array (
    'GET' => 
    array (
        'url' => 'contracts',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contracts',
            'longDescription' => 'Get a list of contracts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter contracts of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contract objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0}/lines ====

$o['v1']['contracts/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'contracts/{id}/lines',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of a contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contract',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'contracts/{id}/lines',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contrat to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Contractline data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0}/lines/{n1} ====

$o['v1']['contracts/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'contracts/{id}/lines/{lineid}',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line to given contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contrat to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Contractline data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contracts/{id}/lines/{lineid}',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'deleteLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line to given contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contract to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0}/lines/{n1}/activate ====

$o['v1']['contracts/{n0}/lines/{n1}/activate'] = array (
    'PUT' => 
    array (
        'url' => 'contracts/{id}/lines/{lineid}/activate',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'activateLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'datestart' => 2,
            'dateend' => 3,
            'comment' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Activate a service line of a given contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contract to activate',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to activate',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'datestart',
                    'description' => 'Date start',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Datestart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'dateend',
                    'description' => 'Date end',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Dateend',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'comment',
                    'description' => 'Comment',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Comment',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}/activate',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0}/lines/{n1}/unactivate ====

$o['v1']['contracts/{n0}/lines/{n1}/unactivate'] = array (
    'PUT' => 
    array (
        'url' => 'contracts/{id}/lines/{lineid}/unactivate',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'unactivateLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'datestart' => 2,
            'comment' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Unactivate a service line of a given contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contract to activate',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to activate',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'datestart',
                    'description' => 'Date start',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Datestart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'comment',
                    'description' => 'Comment',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Comment',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}/unactivate',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0}/validate ====

$o['v1']['contracts/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'contracts/{id}/validate',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contract ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contracts/{n0}/close ====

$o['v1']['contracts/{n0}/close'] = array (
    'POST' => 
    array (
        'url' => 'contracts/{id}/close',
        'className' => 'Contracts',
        'path' => 'contracts',
        'methodName' => 'close',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Close all services of a contract',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contract ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/close',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contracts',
            'classDescription' => 'API class for contracts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/download ====

$o['v1']['documents/download'] = array (
    'GET' => 
    array (
        'url' => 'documents/download',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'module_part' => 0,
            'original_file' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Download a document.',
            'longDescription' => ' Note that, this API is similar to using the wrapper link "documents.php" to download a file (used for internal HTML links of documents into application), but with no need to have a session cookie (the token is used instead).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'module_part',
                    'description' => 'Name of module or area concerned by file download (\'facture\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module Part',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: IN201701-999/IN201701-999.pdf)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Original File',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET /download',
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
                'UploadFormat' => 'Luracast\\Restler\\Format\\UploadFormat',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/download/index ====

$o['v1']['documents/download/index'] = array (
    'GET' => 
    array (
        'url' => 'documents/download',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'module_part' => 0,
            'original_file' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Download a document.',
            'longDescription' => ' Note that, this API is similar to using the wrapper link "documents.php" to download a file (used for internal HTML links of documents into application), but with no need to have a session cookie (the token is used instead).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'module_part',
                    'description' => 'Name of module or area concerned by file download (\'facture\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module Part',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: IN201701-999/IN201701-999.pdf)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Original File',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET /download',
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
                'UploadFormat' => 'Luracast\\Restler\\Format\\UploadFormat',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/builddoc ====

$o['v1']['documents/builddoc'] = array (
    'PUT' => 
    array (
        'url' => 'documents/builddoc',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'builddoc',
        'arguments' => 
        array (
            'module_part' => 0,
            'original_file' => 1,
            'doctemplate' => 2,
            'langcode' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
            2 => '',
            3 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Build a document.',
            'longDescription' => ' Test sample 1: { "module_part": "invoice", "original_file": "FA1701-001/FA1701-001.pdf", "doctemplate": "crabe", "langcode": "fr_FR" }.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'module_part',
                    'description' => 'Name of module or area concerned by file download (\'invoice\', \'order\', ...).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Module Part',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: IN201701-999/IN201701-999.pdf).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Original File',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'doctemplate',
                    'description' => 'Set here the doc template to use for document generation (If not set, use the default template).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Doctemplate',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'langcode',
                    'description' => 'Language code like \'en_US\', \'fr_FR\', \'es_ES\', ... (If not set, use the default language).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Langcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '501',
                    'message' => 'Not Implemented',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                5 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'PUT /builddoc',
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
                'UploadFormat' => 'Luracast\\Restler\\Format\\UploadFormat',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents ====

$o['v1']['documents'] = array (
    'GET' => 
    array (
        'url' => 'documents',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'getDocumentsListByElement',
        'arguments' => 
        array (
            'modulepart' => 0,
            'id' => 1,
            'ref' => 2,
            'sortfield' => 3,
            'sortorder' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => '',
            3 => '',
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Return the list of documents of a dedicated element (from its ID or Ref)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned (\'thirdparty\', \'member\', \'proposal\', \'order\', \'invoice\', \'shipment\', \'project\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Id',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort criteria (\'\',\'fullname\',\'relativename\',\'name\',\'date\',\'size\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order (\'asc\' or \'desc\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of documents with path',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET /',
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
                'UploadFormat' => 'Luracast\\Restler\\Format\\UploadFormat',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/upload ====

$o['v1']['documents/upload'] = array (
    'POST' => 
    array (
        'url' => 'documents/upload',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'post',
        'arguments' => 
        array (
            'filename' => 0,
            'modulepart' => 1,
            'ref' => 2,
            'subdir' => 3,
            'filecontent' => 4,
            'fileencoding' => 5,
            'overwriteifexists' => 6,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => '',
            4 => '',
            5 => '',
            6 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Upload a file.',
            'longDescription' => ' Test sample 1: { "filename": "mynewfile.txt", "modulepart": "facture", "ref": "FA1701-001", "subdir": "", "filecontent": "content text", "fileencoding": "", "overwriteifexists": "0" }. Test sample 2: { "filename": "mynewfile.txt", "modulepart": "medias", "ref": "", "subdir": "image/mywebsite", "filecontent": "Y29udGVudCB0ZXh0Cg==", "fileencoding": "base64", "overwriteifexists": "0" }.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'filename',
                    'description' => 'Name of file to create (\'FA1705-0123.txt\')',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Filename',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned by file upload (\'facture\', \'project\', \'project_task\', ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Reference of object (This will define subdir automatically and store submited file into it)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'subdir',
                    'description' => 'Subdirectory (Only if ref not provided)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Subdir',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'filecontent',
                    'description' => 'File content (string with file content. An empty file will be created if this parameter is not provided)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Filecontent',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'fileencoding',
                    'description' => 'File encoding (\'\'=no encoding, \'base64\'=Base 64)',
                    'properties' => 
                    array (
                        'example' => '\'\' or \'base64\'',
                        'from' => 'body',
                    ),
                    'label' => 'Fileencoding',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'int',
                    'name' => 'overwriteifexists',
                    'description' => 'Overwrite file if exists (1 by default)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Overwriteifexists',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'POST /upload',
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
                'UploadFormat' => 'Luracast\\Restler\\Format\\UploadFormat',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 expensereports/{n0} ====

$o['v1']['expensereports/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'expensereports/{id}',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a Expense Report object',
            'longDescription' => 'Return an array with Expense Report informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Expense Report',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'expensereports/{id}',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update Expense Report general fields (won\'t touch lines of expensereport)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of Expense Report to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'expensereports/{id}',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete Expense Report',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Expense Report ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 expensereports ====

$o['v1']['expensereports'] = array (
    'GET' => 
    array (
        'url' => 'expensereports',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Expense Reports',
            'longDescription' => 'Get a list of Expense Reports',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Expense Report objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'expensereports',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create Expense Report object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of Expense Report',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 expensereports/index ====

$o['v1']['expensereports/index'] = array (
    'GET' => 
    array (
        'url' => 'expensereports',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Expense Reports',
            'longDescription' => 'Get a list of Expense Reports',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Expense Report objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 interventions/{n0} ====

$o['v1']['interventions/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'interventions/{id}',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a Expense Report object',
            'longDescription' => 'Return an array with Expense Report informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Expense Report',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 interventions ====

$o['v1']['interventions'] = array (
    'GET' => 
    array (
        'url' => 'interventions',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List of interventions',
            'longDescription' => 'Return a list of interventions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'interventions',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create intervention object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of intervention',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 interventions/index ====

$o['v1']['interventions/index'] = array (
    'GET' => 
    array (
        'url' => 'interventions',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List of interventions',
            'longDescription' => 'Return a list of interventions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 interventions/{n0}/lines ====

$o['v1']['interventions/{n0}/lines'] = array (
    'POST' => 
    array (
        'url' => 'interventions/{id}/lines',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given intervention',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of intervention to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 interventions/{n0}/validate ====

$o['v1']['interventions/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'interventions/{id}/validate',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an intervention',
            'longDescription' => 'If you get a bad value for param notrigger check, provide this in body { "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Intervention ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 interventions/{n0}/close ====

$o['v1']['interventions/{n0}/close'] = array (
    'POST' => 
    array (
        'url' => 'interventions/{id}/close',
        'className' => 'Interventions',
        'path' => 'interventions',
        'methodName' => 'closeFichinter',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Close an intervention',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Intervention ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/close',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'interventions',
            'classDescription' => 'API class for fichinters',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0} ====

$o['v1']['invoices/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a invoice object',
            'longDescription' => 'Return an array with invoice informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices ====

$o['v1']['invoices'] = array (
    'GET' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create invoice object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of invoice',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/index ====

$o['v1']['invoices/index'] = array (
    'GET' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/createfromorder/{n0} ====

$o['v1']['invoices/createfromorder/{n0}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/createfromorder/{orderid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'createInvoiceFromOrder',
        'arguments' => 
        array (
            'orderid' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create an invoice using an existing order.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'orderid',
                    'description' => 'Id of the order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Orderid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST /createfromorder/{orderid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/lines ====

$o['v1']['invoices/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}/lines',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of an invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices/{id}/lines',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to a given invoice',
            'longDescription' => 'Exemple of POST query : { "desc": "Desc", "subprice": "1.00000000", "qty": "1", "tva_tx": "20.000", "localtax1_tx": "0.000", "localtax2_tx": "0.000", "fk_product": "1", "remise_percent": "0", "date_start": "", "date_end": "", "fk_code_ventilation": 0, "info_bits": "0", "fk_remise_except": null, "product_type": "1", "rang": "-1", "special_code": "0", "fk_parent_line": null, "fk_fournprice": null, "pa_ht": "0.00000000", "label": "", "array_options": [], "situation_percent": "100", "fk_prev_id": null, "fk_unit": null }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'InvoiceLine data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/lines/{n1} ====

$o['v1']['invoices/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'invoices/{id}/lines/{lineid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line to a given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'InvoiceLine data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoices/{id}/lines/{lineid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'deleteLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Deletes a line of a given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of the line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/settodraft ====

$o['v1']['invoices/{n0}/settodraft'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/settodraft',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'settodraft',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => -1,
        ),
        'metadata' => 
        array (
            'description' => 'Sets an invoice as draft',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => -1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/settodraft',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/validate ====

$o['v1']['invoices/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/validate',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
            'notrigger' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an invoice',
            'longDescription' => 'If you get a bad value for param notrigger check that ou provide this in body { "idwarehouse": 0, "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/settopaid ====

$o['v1']['invoices/{n0}/settopaid'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/settopaid',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'settopaid',
        'arguments' => 
        array (
            'id' => 0,
            'close_code' => 1,
            'close_note' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
            2 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Sets an invoice as paid',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'close_code',
                    'description' => 'Code renseigne si on classe a payee completement alors que paiement incomplet (cas escompte par exemple)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Close Code',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'close_note',
                    'description' => 'Commentaire renseigne si on classe a payee alors que paiement incomplet (cas escompte par exemple)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Close Note',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/settopaid',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'An invoice object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/settounpaid ====

$o['v1']['invoices/{n0}/settounpaid'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/settounpaid',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'settounpaid',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Sets an invoice as unpaid',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/settounpaid',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'An invoice object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/usediscount/{n1} ====

$o['v1']['invoices/{n0}/usediscount/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/usediscount/{discountid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'useDiscount',
        'arguments' => 
        array (
            'id' => 0,
            'discountid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a discount line into an invoice (as an invoice line) using an existing absolute discount',
            'longDescription' => 'Note that this consume the discount.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'discountid',
                    'description' => 'Id of discount',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Discountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/usediscount/{discountid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/usecreditnote/{n1} ====

$o['v1']['invoices/{n0}/usecreditnote/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/usecreditnote/{discountid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'useCreditNote',
        'arguments' => 
        array (
            'id' => 0,
            'discountid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add an available credit note discount to payments of an existing invoice.',
            'longDescription' => ' Note that this consume the credit note.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'discountid',
                    'description' => 'Id of a discount coming from a credit note',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Discountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/usecreditnote/{discountid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/payments ====

$o['v1']['invoices/{n0}/payments'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}/payments',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getPayments',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get list of payments of a given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/payments',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices/{id}/payments',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'addPayment',
        'arguments' => 
        array (
            'id' => 0,
            'datepaye' => 1,
            'paiementid' => 2,
            'closepaidinvoices' => 3,
            'accountid' => 4,
            'num_paiement' => 5,
            'comment' => 6,
            'chqemetteur' => 7,
            'chqbank' => 8,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => '',
            6 => '',
            7 => '',
            8 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add payment line to a specific invoice',
            'longDescription' => 'The model schema is defined by the PaymentData class.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'datepaye',
                    'description' => 'Payment date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Datepaye',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'paiementid',
                    'description' => 'Payment mode Id',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                    ),
                    'label' => 'Paiementid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'closepaidinvoices',
                    'description' => 'Close paid invoices',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'choice' => 
                        array (
                            0 => 'yes',
                            1 => 'no',
                        ),
                    ),
                    'label' => 'Closepaidinvoices',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'accountid',
                    'description' => 'Account Id',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                    ),
                    'label' => 'Accountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'num_paiement',
                    'description' => 'Payment number (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Num Paiement',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'comment',
                    'description' => 'Note (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Comment',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'chqemetteur',
                    'description' => 'Payment issuer (mandatory if paiementcode = \'CHQ\')',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Chqemetteur',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'chqbank',
                    'description' => 'Issuer bank name (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Chqbank',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/payments',
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Payment ID',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 login ====

$o['v1']['login'] = array (
    'GET' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both methods are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "DOLAPIKEY" into field at the top right of page. Note: The API key (DOLAPIKEY) can be found/set on the user page.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'query',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
    'POST' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both methods are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "DOLAPIKEY" into field at the top right of page. Note: The API key (DOLAPIKEY) can be found/set on the user page.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'reset',
                        'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Reset',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'body',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 login/index ====

$o['v1']['login/index'] = array (
    'GET' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both methods are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "DOLAPIKEY" into field at the top right of page. Note: The API key (DOLAPIKEY) can be found/set on the user page.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'query',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
    'POST' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both methods are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "DOLAPIKEY" into field at the top right of page. Note: The API key (DOLAPIKEY) can be found/set on the user page.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'reset',
                        'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Reset',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'body',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 members/{n0} ====

$o['v1']['members/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'members/{id}',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a member object',
            'longDescription' => 'Return an array with member informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'members/{id}',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'members/{id}',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'member ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members ====

$o['v1']['members'] = array (
    'GET' => 
    array (
        'url' => 'members',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'typeid' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List members',
            'longDescription' => 'Get a list of members',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'typeid',
                    'description' => 'ID of the type of member',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Typeid',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of member objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'members',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create member object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of member',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members/index ====

$o['v1']['members/index'] = array (
    'GET' => 
    array (
        'url' => 'members',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'typeid' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List members',
            'longDescription' => 'Get a list of members',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'typeid',
                    'description' => 'ID of the type of member',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Typeid',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of member objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members/{n0}/subscriptions ====

$o['v1']['members/{n0}/subscriptions'] = array (
    'GET' => 
    array (
        'url' => 'members/{id}/subscriptions',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'getSubscriptions',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'List subscriptions of a member',
            'longDescription' => 'Get a list of subscriptions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of subscription objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET {id}/subscriptions',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'members/{id}/subscriptions',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'createSubscription',
        'arguments' => 
        array (
            'id' => 0,
            'start_date' => 1,
            'end_date' => 2,
            'amount' => 3,
            'label' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add a subscription for a member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'start_date',
                    'description' => 'Start date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Start Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'end_date',
                    'description' => 'End date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'End Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'float',
                    'name' => 'amount',
                    'description' => 'Amount (may be 0)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Amount',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of subscription',
            ),
            'url' => 'POST {id}/subscriptions',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members/{n0}/categories ====

$o['v1']['members/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'members/{id}/categories',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 memberstypes/{n0} ====

$o['v1']['memberstypes/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'memberstypes/{id}',
        'className' => 'Memberstypes',
        'path' => 'memberstypes',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a member type object',
            'longDescription' => 'Return an array with member type informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member type',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'memberstypes',
            'classDescription' => 'API class for members types',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'memberstypes/{id}',
        'className' => 'Memberstypes',
        'path' => 'memberstypes',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update member type',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member type to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'memberstypes',
            'classDescription' => 'API class for members types',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'memberstypes/{id}',
        'className' => 'Memberstypes',
        'path' => 'memberstypes',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete member type',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'member type ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'memberstypes',
            'classDescription' => 'API class for members types',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 memberstypes ====

$o['v1']['memberstypes'] = array (
    'GET' => 
    array (
        'url' => 'memberstypes',
        'className' => 'Memberstypes',
        'path' => 'memberstypes',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List members types',
            'longDescription' => 'Get a list of members types',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.libelle:like:\'SO-%\') and (t.subscription:=:\'1\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of member type objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'memberstypes',
            'classDescription' => 'API class for members types',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'memberstypes',
        'className' => 'Memberstypes',
        'path' => 'memberstypes',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create member type object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of member type',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'memberstypes',
            'classDescription' => 'API class for members types',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 memberstypes/index ====

$o['v1']['memberstypes/index'] = array (
    'GET' => 
    array (
        'url' => 'memberstypes',
        'className' => 'Memberstypes',
        'path' => 'memberstypes',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List members types',
            'longDescription' => 'Get a list of members types',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.libelle:like:\'SO-%\') and (t.subscription:=:\'1\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of member type objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'memberstypes',
            'classDescription' => 'API class for members types',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0} ====

$o['v1']['orders/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'orders/{id}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an order object',
            'longDescription' => 'Return an array with order informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'orders/{id}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update order general fields (won\'t touch lines of order)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'orders/{id}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders ====

$o['v1']['orders'] = array (
    'GET' => 
    array (
        'url' => 'orders',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List orders',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'orders',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create order object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of order',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/index ====

$o['v1']['orders/index'] = array (
    'GET' => 
    array (
        'url' => 'orders',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List orders',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/lines ====

$o['v1']['orders/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'orders/{id}/lines',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of an order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'orders/{id}/lines',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'OrderLine data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/lines/{n1} ====

$o['v1']['orders/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'orders/{id}/lines/{lineid}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line to given order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'OrderLine data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'orders/{id}/lines/{lineid}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'deleteLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line to given order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/validate ====

$o['v1']['orders/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'orders/{id}/validate',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
            'notrigger' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an order',
            'longDescription' => 'If you get a bad value for param notrigger check, provide this in body { "idwarehouse": 0, "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/reopen ====

$o['v1']['orders/{n0}/reopen'] = array (
    'POST' => 
    array (
        'url' => 'orders/{id}/reopen',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'reopen',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Tag the order as validated (opened)',
            'longDescription' => 'Function used when order is reopend after being closed.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of the order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/reopen',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                4 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/setinvoiced ====

$o['v1']['orders/{n0}/setinvoiced'] = array (
    'POST' => 
    array (
        'url' => 'orders/{id}/setinvoiced',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'setinvoiced',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Classify the order as invoiced. Could be also called setbilled',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of the order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/setinvoiced',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/close ====

$o['v1']['orders/{n0}/close'] = array (
    'POST' => 
    array (
        'url' => 'orders/{id}/close',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'close',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Close an order (Classify it as "Delivered")',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => 'Disabled triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/close',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/settodraft ====

$o['v1']['orders/{n0}/settodraft'] = array (
    'POST' => 
    array (
        'url' => 'orders/{id}/settodraft',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'settodraft',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => -1,
        ),
        'metadata' => 
        array (
            'description' => 'Set an order to draft',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID to use for stock change (Used only if option STOCK_CALCULATE_ON_VALIDATE_ORDER is on)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => -1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/settodraft',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/createfromproposal/{n0} ====

$o['v1']['orders/createfromproposal/{n0}'] = array (
    'POST' => 
    array (
        'url' => 'orders/createfromproposal/{proposalid}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'createOrderFromProposal',
        'arguments' => 
        array (
            'proposalid' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create an order using an existing proposal.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'proposalid',
                    'description' => 'Id of the proposal',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Proposalid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST /createfromproposal/{proposalid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0} ====

$o['v1']['products/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'includestockdata' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a product object',
            'longDescription' => 'Return an array with product information. TODO implement getting a product by ref or by $ref_ext',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'products/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of product to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'products/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Product ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products ====

$o['v1']['products'] = array (
    'GET' => 
    array (
        'url' => 'products',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.ref',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List products',
            'longDescription' => 'Get a list of products',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.ref',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Use this param to filter list (0 for all, 1 for only product, 2 for only service)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.tobuy:=:0) and (t.tosell:=:1)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of product objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'products',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create product object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of product',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/index ====

$o['v1']['products/index'] = array (
    'GET' => 
    array (
        'url' => 'products',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.ref',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List products',
            'longDescription' => 'Get a list of products',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.ref',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Use this param to filter list (0 for all, 1 for only product, 2 for only service)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.tobuy:=:0) and (t.tosell:=:1)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of product objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/categories ====

$o['v1']['products/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/categories',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/selling_multiprices/per_segment ====

$o['v1']['products/{n0}/selling_multiprices/per_segment'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/selling_multiprices/per_segment',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCustomerPricesPerSegment',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get prices per segment for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/selling_multiprices/per_segment',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/selling_multiprices/per_customer ====

$o['v1']['products/{n0}/selling_multiprices/per_customer'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/selling_multiprices/per_customer',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCustomerPricesPerCustomer',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get prices per customer for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/selling_multiprices/per_customer',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/selling_multiprices/per_quantity ====

$o['v1']['products/{n0}/selling_multiprices/per_quantity'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/selling_multiprices/per_quantity',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCustomerPricesPerQuantity',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get prices per quantity for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/selling_multiprices/per_quantity',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0} ====

$o['v1']['projects/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'projects/{id}',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a project object',
            'longDescription' => 'Return an array with project informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of project',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'projects/{id}',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update project general fields (won\'t touch lines of project)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of project to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'projects/{id}',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete project',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Project ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects ====

$o['v1']['projects'] = array (
    'GET' => 
    array (
        'url' => 'projects',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List projects',
            'longDescription' => 'Get a list of projects',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter projects of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'projects',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create project object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of project',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/index ====

$o['v1']['projects/index'] = array (
    'GET' => 
    array (
        'url' => 'projects',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List projects',
            'longDescription' => 'Get a list of projects',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter projects of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0}/tasks ====

$o['v1']['projects/{n0}/tasks'] = array (
    'GET' => 
    array (
        'url' => 'projects/{id}/tasks',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
            'includetimespent' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get tasks of a project.',
            'longDescription' => 'See also API /tasks',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of project',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includetimespent',
                    'description' => '0=Return only list of tasks. 1=Include a summary of time spent, 2=Include details of time spent lines (2 is no implemented yet)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetimespent',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'GET {id}/tasks',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0}/roles ====

$o['v1']['projects/{n0}/roles'] = array (
    'GET' => 
    array (
        'url' => 'projects/{id}/roles',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'getRoles',
        'arguments' => 
        array (
            'id' => 0,
            'userid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get roles a user is assigned to a project with',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of project',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'userid',
                    'description' => 'Id of user (0 = connected user)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Userid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/roles',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0}/validate ====

$o['v1']['projects/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'projects/{id}/validate',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate a project.',
            'longDescription' => 'You can test this API with the following input message { "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Project ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0} ====

$o['v1']['proposals/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'proposals/{id}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a commercial proposal object',
            'longDescription' => 'Return an array with commercial proposal informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of commercial proposal',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'proposals/{id}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update commercial proposal general fields (won\'t touch lines of commercial proposal)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'proposals/{id}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Commercial proposal ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals ====

$o['v1']['proposals'] = array (
    'GET' => 
    array (
        'url' => 'proposals',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List commercial proposals',
            'longDescription' => 'Get a list of commercial proposals',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter commercial proposals.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'proposals',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create commercial proposal object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of proposal',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/index ====

$o['v1']['proposals/index'] = array (
    'GET' => 
    array (
        'url' => 'proposals',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List commercial proposals',
            'longDescription' => 'Get a list of commercial proposals',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter commercial proposals.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/lines ====

$o['v1']['proposals/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'proposals/{id}/lines',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of a commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'proposals/{id}/lines',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Commercial proposal line data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/lines/{n1} ====

$o['v1']['proposals/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'proposals/{id}/lines/{lineid}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line of given commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Commercial proposal line data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'proposals/{id}/lines/{lineid}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'deleteLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line of given commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/settodraft ====

$o['v1']['proposals/{n0}/settodraft'] = array (
    'POST' => 
    array (
        'url' => 'proposals/{id}/settodraft',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'settodraft',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Set a proposal to draft',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/settodraft',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/validate ====

$o['v1']['proposals/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'proposals/{id}/validate',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate a commercial proposal',
            'longDescription' => 'If you get a bad value for param notrigger check that ou provide this in body { "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Commercial proposal ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'Exception',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/close ====

$o['v1']['proposals/{n0}/close'] = array (
    'POST' => 
    array (
        'url' => 'proposals/{id}/close',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'close',
        'arguments' => 
        array (
            'id' => 0,
            'status' => 1,
            'note_private' => 2,
            'notrigger' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Close (Accept or refuse) a quote / commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Commercial proposal ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'status',
                    'description' => 'Must be 2 (accepted) or 3 (refused)',
                    'properties' => 
                    array (
                        'min' => '2',
                        'max' => '3',
                        'from' => 'body',
                    ),
                    'label' => 'Status',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'note_private',
                    'description' => 'Add this mention at end of private note',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Note Private',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => 'Disabled triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/close',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/setinvoiced ====

$o['v1']['proposals/{n0}/setinvoiced'] = array (
    'POST' => 
    array (
        'url' => 'proposals/{id}/setinvoiced',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'setinvoiced',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Set a commercial proposal billed. Could be also called setbilled',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Commercial proposal ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/setinvoiced',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/payment_types ====

$o['v1']['setup/dictionary/payment_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/payment_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getPaymentTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of payments types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter with. Syntax example "(t.code:=:\'CHQ\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/payment_types',
            'return' => 
            array (
                'type' => 'array',
                'description' => '[List of payment types]',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'OK',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/countries ====

$o['v1']['setup/dictionary/countries'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/countries',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfCountries',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'filter' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of countries.',
            'longDescription' => ' The names of the countries will be translated to the given language if the $lang parameter is provided. The value of $lang must be a language code supported by Dolibarr, for example \'en_US\' or \'fr_FR\'. The returned list is sorted by country ID.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'To filter the countries by name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the countries must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of countries',
            ),
            'url' => 'GET dictionary/countries',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/countries/{n0} ====

$o['v1']['setup/dictionary/countries/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/countries/{id}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCountryByID',
        'arguments' => 
        array (
            'id' => 0,
            'lang' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get country by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of country',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the name of the country must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/countries/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/availability ====

$o['v1']['setup/dictionary/availability'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/availability',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getAvailability',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of delivery times.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Delivery times is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter with.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/availability',
            'return' => 
            array (
                'type' => 'array',
                'description' => '[List of availability]',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'OK',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/event_types ====

$o['v1']['setup/dictionary/event_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/event_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfEventTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'type' => 4,
            'module' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of events types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'To filter on type of event',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'module',
                    'description' => 'To filter on module events',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of events types',
            ),
            'url' => 'GET dictionary/event_types',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/extrafields ====

$o['v1']['setup/extrafields'] = array (
    'GET' => 
    array (
        'url' => 'setup/extrafields',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfExtrafields',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'type' => 2,
            'sqlfilters' => 3,
        ),
        'defaults' => 
        array (
            0 => 't.pos',
            1 => 'ASC',
            2 => '',
            3 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of extra fields.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.pos',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of element (\'adherent\', \'commande\', \'thirdparty\', \'facture\', \'propal\', \'product\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'SO-%\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of events types',
            ),
            'url' => 'GET extrafields',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/towns ====

$o['v1']['setup/dictionary/towns'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/towns',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfTowns',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'zipcode' => 4,
            'town' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'zip,town',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of towns.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'zip,town',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'zipcode',
                    'description' => 'To filter on zipcode',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Zipcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'town',
                    'description' => 'To filter on city name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Town',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of towns',
            ),
            'url' => 'GET dictionary/towns',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/payment_terms ====

$o['v1']['setup/dictionary/payment_terms'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/payment_terms',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getPaymentTerms',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'sortorder',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of payments terms.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'sortorder',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter. Syntax example "(t.code:=:\'CHQ\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/payment_terms',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of payment terms',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '200',
                    'message' => 'OK',
                    'exception' => 'OK',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/checkintegrity ====

$o['v1']['setup/checkintegrity'] = array (
    'GET' => 
    array (
        'url' => 'setup/checkintegrity',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCheckIntegrity',
        'arguments' => 
        array (
            'target' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Do a test of integrity for files and setup.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'target',
                    'description' => 'Can be \'local\' or \'default\' or Url of the signatures file to use for the test. Must be reachable by the tested Dolibarr.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Target',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Result',
                'description' => 'of file and setup integrity check',
            ),
            'url' => 'GET checkintegrity',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 shipments/{n0} ====

$o['v1']['shipments/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'shipments/{id}',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a shipment object',
            'longDescription' => 'Return an array with shipment informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of shipment',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'shipments/{id}',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update shipment general fields (won\'t touch lines of shipment)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of shipment to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'shipments/{id}',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete shipment',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Shipment ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 shipments ====

$o['v1']['shipments'] = array (
    'GET' => 
    array (
        'url' => 'shipments',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List shipments',
            'longDescription' => 'Get a list of shipments',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter shipments of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of shipment objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'shipments',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create shipment object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of shipment',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 shipments/index ====

$o['v1']['shipments/index'] = array (
    'GET' => 
    array (
        'url' => 'shipments',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List shipments',
            'longDescription' => 'Get a list of shipments',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter shipments of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of shipment objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 shipments/{n0}/lines/{n1} ====

$o['v1']['shipments/{n0}/lines/{n1}'] = array (
    'DELETE' => 
    array (
        'url' => 'shipments/{id}/lines/{lineid}',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'deleteLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line to given shipment',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of shipment to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 shipments/{n0}/validate ====

$o['v1']['shipments/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'shipments/{id}/validate',
        'className' => 'Shipments',
        'path' => 'shipments',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate a shipment',
            'longDescription' => 'This may record stock movements if module stock is enabled and option to decrease stock on shipment is on.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Shipment ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'shipments',
            'classDescription' => 'API class for shipments',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 status ====

$o['v1']['status'] = array (
    'GET' => 
    array (
        'url' => 'status',
        'className' => 'Status',
        'path' => 'status',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get status (Dolibarr version)',
            'longDescription' => '',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'status',
            'classDescription' => 'API that gives the status of the Dolibarr instance.',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 status/index ====

$o['v1']['status/index'] = array (
    'GET' => 
    array (
        'url' => 'status',
        'className' => 'Status',
        'path' => 'status',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get status (Dolibarr version)',
            'longDescription' => '',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'status',
            'classDescription' => 'API that gives the status of the Dolibarr instance.',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 stockmovements ====

$o['v1']['stockmovements'] = array (
    'GET' => 
    array (
        'url' => 'stockmovements',
        'className' => 'Stockmovements',
        'path' => 'stockmovements',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get a list of stock movement',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.product_id:=:1) and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'stockmovements',
            'classDescription' => 'API class for stock movements',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'stockmovements',
        'className' => 'Stockmovements',
        'path' => 'stockmovements',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create stock movement object.',
            'longDescription' => 'You can use the following message to test this RES API: { "product_id": 1, "warehouse_id": 1, "qty": 1, "lot": "", "movementcode": "INV123", "movementlabel": "Inventory 123", "price": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of stock movement',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'stockmovements',
            'classDescription' => 'API class for stock movements',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 stockmovements/index ====

$o['v1']['stockmovements/index'] = array (
    'GET' => 
    array (
        'url' => 'stockmovements',
        'className' => 'Stockmovements',
        'path' => 'stockmovements',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get a list of stock movement',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.product_id:=:1) and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'stockmovements',
            'classDescription' => 'API class for stock movements',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 subscriptions/{n0} ====

$o['v1']['subscriptions/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'subscriptions/{id}',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a subscription object',
            'longDescription' => 'Return an array with subscription informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of subscription',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'subscriptions/{id}',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update subscription',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of subscription to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'subscriptions/{id}',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete subscription',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of subscription to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 subscriptions ====

$o['v1']['subscriptions'] = array (
    'GET' => 
    array (
        'url' => 'subscriptions',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 'dateadh',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List subscriptions',
            'longDescription' => 'Get a list of subscriptions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'dateadh',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of subscription objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'subscriptions',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create subscription object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of subscription',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 subscriptions/index ====

$o['v1']['subscriptions/index'] = array (
    'GET' => 
    array (
        'url' => 'subscriptions',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 'dateadh',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List subscriptions',
            'longDescription' => 'Get a list of subscriptions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'dateadh',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of subscription objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices/{n0} ====

$o['v1']['supplierinvoices/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'supplierinvoices/{id}',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a supplier invoice object',
            'longDescription' => 'Return an array with supplier invoice information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of supplier invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'supplierinvoices/{id}',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update supplier invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of supplier invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'supplierinvoices/{id}',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete supplier invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Supplier invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'type',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices ====

$o['v1']['supplierinvoices'] = array (
    'GET' => 
    array (
        'url' => 'supplierinvoices',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of supplier invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter invoices of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'supplierinvoices',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create supplier invoice object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of supplier invoice',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices/index ====

$o['v1']['supplierinvoices/index'] = array (
    'GET' => 
    array (
        'url' => 'supplierinvoices',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of supplier invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter invoices of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices/{n0}/validate ====

$o['v1']['supplierinvoices/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'supplierinvoices/{id}/validate',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
            'notrigger' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "idwarehouse": 0, "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierorders/{n0} ====

$o['v1']['supplierorders/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'supplierorders/{id}',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a supplier order object',
            'longDescription' => 'Return an array with supplier order information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of supplier order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'supplierorders/{id}',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update supplier order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of supplier order to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'supplierorders/{id}',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete supplier order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Supplier order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'type',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierorders ====

$o['v1']['supplierorders'] = array (
    'GET' => 
    array (
        'url' => 'supplierorders',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List orders',
            'longDescription' => 'Get a list of supplier orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by order status : draft | validated | approved | running | received_start | received_end | cancelled | refused',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'supplierorders',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create supplier order object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of supplier order',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierorders/index ====

$o['v1']['supplierorders/index'] = array (
    'GET' => 
    array (
        'url' => 'supplierorders',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List orders',
            'longDescription' => 'Get a list of supplier orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by order status : draft | validated | approved | running | received_start | received_end | cancelled | refused',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierorders/{n0}/validate ====

$o['v1']['supplierorders/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'supplierorders/{id}/validate',
        'className' => 'Supplierorders',
        'path' => 'supplierorders',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
            'notrigger' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "idwarehouse": 0, "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierorders',
            'classDescription' => 'API class for supplier orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierproposals/{n0} ====

$o['v1']['supplierproposals/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'supplierproposals/{id}',
        'className' => 'Supplierproposals',
        'path' => 'supplierproposals',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a supplier proposal (price request) object',
            'longDescription' => 'Return an array with supplier proposal informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of supplier proposal',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierproposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierproposals ====

$o['v1']['supplierproposals'] = array (
    'GET' => 
    array (
        'url' => 'supplierproposals',
        'className' => 'Supplierproposals',
        'path' => 'supplierproposals',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List supplier proposals',
            'longDescription' => 'Get a list of supplier proposals',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter supplier proposals.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierproposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierproposals/index ====

$o['v1']['supplierproposals/index'] = array (
    'GET' => 
    array (
        'url' => 'supplierproposals',
        'className' => 'Supplierproposals',
        'path' => 'supplierproposals',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List supplier proposals',
            'longDescription' => 'Get a list of supplier proposals',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter supplier proposals.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierproposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/{n0} ====

$o['v1']['tasks/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'tasks/{id}',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'includetimespent' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a task object',
            'longDescription' => 'Return an array with task informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of task',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includetimespent',
                    'description' => '0=Return only task. 1=Include a summary of time spent, 2=Include details of time spent lines (2 is no implemented yet)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetimespent',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'tasks/{id}',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update task general fields (won\'t touch time spent of task)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of task to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'tasks/{id}',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete task',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Task ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks ====

$o['v1']['tasks'] = array (
    'GET' => 
    array (
        'url' => 'tasks',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List tasks',
            'longDescription' => 'Get a list of tasks',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'tasks',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create task object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of project',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/index ====

$o['v1']['tasks/index'] = array (
    'GET' => 
    array (
        'url' => 'tasks',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List tasks',
            'longDescription' => 'Get a list of tasks',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/{n0}/roles ====

$o['v1']['tasks/{n0}/roles'] = array (
    'GET' => 
    array (
        'url' => 'tasks/{id}/roles',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'getRoles',
        'arguments' => 
        array (
            'id' => 0,
            'userid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get roles a user is assigned to a task with',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of task',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'userid',
                    'description' => 'Id of user (0 = connected user)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Userid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/roles',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/{n0}/addtimespent ====

$o['v1']['tasks/{n0}/addtimespent'] = array (
    'POST' => 
    array (
        'url' => 'tasks/{id}/addtimespent',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'addTimeSpent',
        'arguments' => 
        array (
            'id' => 0,
            'date' => 1,
            'duration' => 2,
            'user_id' => 3,
            'note' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add time spent to a task of a project.',
            'longDescription' => 'You can test this API with the following input message { "date": "2016-12-31 23:15:00", "duration": 1800, "user_id": 1, "note": "My time test" }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Task ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'DateTime',
                    'name' => 'date',
                    'description' => 'Date (YYYY-MM-DD HH:MI:SS in GMT)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'duration',
                    'description' => 'Duration in seconds (3600 = 1h)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Duration',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'user_id',
                    'description' => 'User (Use 0 for connected user)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'User Id',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'note',
                    'description' => 'Note',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Note',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
            ),
            'url' => 'POST {id}/addtimespent',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0} ====

$o['v1']['thirdparties/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a thirdparty object',
            'longDescription' => 'Return an array with thirdparty informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Thirparty ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties ====

$o['v1']['thirdparties'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.nom:like:\'TheCompany%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create thirdparty object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of thirdparty',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/index ====

$o['v1']['thirdparties/index'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.nom:like:\'TheCompany%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/merge/{n1} ====

$o['v1']['thirdparties/{n0}/merge/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/merge/{idtodelete}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'merge',
        'arguments' => 
        array (
            'id' => 0,
            'idtodelete' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Merge a thirdparty into another one.',
            'longDescription' => ' Merge content (properties, notes) and objects (like invoices, events, orders, proposals, ...) of a thirdparty into a target thirdparty, then delete the merged thirdparty. If a property has a defined value both in thirdparty to delete and thirdparty to keep, the value into the thirdparty to delete will be ignored, the value of target thirdparty will remain, except for notes (content is concatenated).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty to keep (the target thirdparty)',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idtodelete',
                    'description' => 'ID of thirdparty to remove (the thirdparty to delete), once data has been merged into the target thirdparty.',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Idtodelete',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT {id}/merge/{idtodelete}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/categories ====

$o['v1']['thirdparties/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/categories',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get customer categories for a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/categories/{n1} ====

$o['v1']['thirdparties/{n0}/categories/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'addCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a customer category to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'POST {id}/categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Remove the link between a customer category and the thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'DELETE {id}/categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/supplier_categories ====

$o['v1']['thirdparties/{n0}/supplier_categories'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/supplier_categories',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getSupplierCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get supplier categories for a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/supplier_categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/supplier_categories/{n1} ====

$o['v1']['thirdparties/{n0}/supplier_categories/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/supplier_categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'addSupplierCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a supplier category to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'POST {id}/supplier_categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/supplier_categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteSupplierCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Remove the link between a category and the thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'DELETE {id}/supplier_categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/outstandingproposals ====

$o['v1']['thirdparties/{n0}/outstandingproposals'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/outstandingproposals',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getOutStandingProposals',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'customer',
        ),
        'metadata' => 
        array (
            'description' => 'Get outstanding proposals of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => '\'customer\' or \'supplier\'',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 'customer',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/outstandingproposals',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of outstandings proposals of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/outstandingorders ====

$o['v1']['thirdparties/{n0}/outstandingorders'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/outstandingorders',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getOutStandingOrder',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'customer',
        ),
        'metadata' => 
        array (
            'description' => 'Get outstanding orders of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => '\'customer\' or \'supplier\'',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 'customer',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/outstandingorders',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of outstandings orders of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/outstandinginvoices ====

$o['v1']['thirdparties/{n0}/outstandinginvoices'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/outstandinginvoices',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getOutStandingInvoices',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'customer',
        ),
        'metadata' => 
        array (
            'description' => 'Get outstanding invoices of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => '\'customer\' or \'supplier\'',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 'customer',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/outstandinginvoices',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of outstandings invoices of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/fixedamountdiscounts ====

$o['v1']['thirdparties/{n0}/fixedamountdiscounts'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/fixedamountdiscounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getFixedAmountDiscounts',
        'arguments' => 
        array (
            'id' => 0,
            'filter' => 1,
            'sortfield' => 2,
            'sortorder' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'none',
            2 => 'f.type',
            3 => 'ASC',
        ),
        'metadata' => 
        array (
            'description' => 'Get fixed amount discount of a thirdparty (all sources: deposit, credit note, commercial offers...)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'Filter exceptional discount. "none" will return every discount, "available" returns unapplied discounts, "used" returns applied discounts',
                    'properties' => 
                    array (
                        'choice' => 
                        array (
                            0 => 'none',
                            1 => 'available',
                            2 => 'used',
                        ),
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => 'none',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'f.type',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/fixedamountdiscounts',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of fixed discount of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '503',
                    'message' => 'Service Unavailable',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/getinvoicesqualifiedforreplacement ====

$o['v1']['thirdparties/{n0}/getinvoicesqualifiedforreplacement'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/getinvoicesqualifiedforreplacement',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getInvoicesQualifiedForReplacement',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Return list of invoices qualified to be replaced by another invoice.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/getinvoicesqualifiedforreplacement',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/getinvoicesqualifiedforcreditnote ====

$o['v1']['thirdparties/{n0}/getinvoicesqualifiedforcreditnote'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/getinvoicesqualifiedforcreditnote',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getInvoicesQualifiedForCreditNote',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Return list of invoices qualified to be corrected by a credit note.',
            'longDescription' => 'Invoices matching the following rules are returned (validated + payment on process) or classified (payed completely or payed partialy) + not already replaced + not already a credit note',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/getinvoicesqualifiedforcreditnote',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'Exception',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'Exception',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users ====

$o['v1']['users'] = array (
    'GET' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Users',
            'longDescription' => 'Get a list of Users',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create user account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'New user data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/index ====

$o['v1']['users/index'] = array (
    'GET' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Users',
            'longDescription' => 'Get a list of Users',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0} ====

$o['v1']['users/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an user object',
            'longDescription' => 'Return an array with user informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of account to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Account ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0}/setGroup/{n1} ====

$o['v1']['users/{n0}/setGroup/{n1}'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}/setGroup/{group}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'setGroup',
        'arguments' => 
        array (
            'id' => 0,
            'group' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'add user to group',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'User ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'group',
                    'description' => 'Group ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Group',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '1 if success',
            ),
            'url' => 'GET {id}/setGroup/{group}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 warehouses/{n0} ====

$o['v1']['warehouses/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'warehouses/{id}',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a warehouse object',
            'longDescription' => 'Return an array with warehouse informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of warehouse',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'warehouses/{id}',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update warehouse',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of warehouse to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'warehouses/{id}',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete warehouse',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 warehouses ====

$o['v1']['warehouses'] = array (
    'GET' => 
    array (
        'url' => 'warehouses',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List warehouses',
            'longDescription' => 'Get a list of warehouses',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'WH-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'warehouses',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create warehouse object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of warehouse',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 warehouses/index ====

$o['v1']['warehouses/index'] = array (
    'GET' => 
    array (
        'url' => 'warehouses',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List warehouses',
            'longDescription' => 'Get a list of warehouses',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'WH-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
);

//==================== apiVersionMap ====================

$o['apiVersionMap'] = array();

//==== apiVersionMap Luracast\Restler\Explorer ====

$o['apiVersionMap']['Luracast\Restler\Explorer'] = array (
    1 => 'Luracast\\Restler\\Explorer',
);

//==== apiVersionMap DolibarrApiAccess ====

$o['apiVersionMap']['DolibarrApiAccess'] = array (
    1 => 'DolibarrApiAccess',
);

//==== apiVersionMap Bankaccounts ====

$o['apiVersionMap']['Bankaccounts'] = array (
    1 => 'Bankaccounts',
);

//==== apiVersionMap Contacts ====

$o['apiVersionMap']['Contacts'] = array (
    1 => 'Contacts',
);

//==== apiVersionMap Contracts ====

$o['apiVersionMap']['Contracts'] = array (
    1 => 'Contracts',
);

//==== apiVersionMap Documents ====

$o['apiVersionMap']['Documents'] = array (
    1 => 'Documents',
);

//==== apiVersionMap Expensereports ====

$o['apiVersionMap']['Expensereports'] = array (
    1 => 'Expensereports',
);

//==== apiVersionMap Interventions ====

$o['apiVersionMap']['Interventions'] = array (
    1 => 'Interventions',
);

//==== apiVersionMap Invoices ====

$o['apiVersionMap']['Invoices'] = array (
    1 => 'Invoices',
);

//==== apiVersionMap Login ====

$o['apiVersionMap']['Login'] = array (
    1 => 'Login',
);

//==== apiVersionMap Members ====

$o['apiVersionMap']['Members'] = array (
    1 => 'Members',
);

//==== apiVersionMap Memberstypes ====

$o['apiVersionMap']['Memberstypes'] = array (
    1 => 'Memberstypes',
);

//==== apiVersionMap Orders ====

$o['apiVersionMap']['Orders'] = array (
    1 => 'Orders',
);

//==== apiVersionMap Products ====

$o['apiVersionMap']['Products'] = array (
    1 => 'Products',
);

//==== apiVersionMap Projects ====

$o['apiVersionMap']['Projects'] = array (
    1 => 'Projects',
);

//==== apiVersionMap Proposals ====

$o['apiVersionMap']['Proposals'] = array (
    1 => 'Proposals',
);

//==== apiVersionMap Setup ====

$o['apiVersionMap']['Setup'] = array (
    1 => 'Setup',
);

//==== apiVersionMap Shipments ====

$o['apiVersionMap']['Shipments'] = array (
    1 => 'Shipments',
);

//==== apiVersionMap Status ====

$o['apiVersionMap']['Status'] = array (
    1 => 'Status',
);

//==== apiVersionMap Stockmovements ====

$o['apiVersionMap']['Stockmovements'] = array (
    1 => 'Stockmovements',
);

//==== apiVersionMap Subscriptions ====

$o['apiVersionMap']['Subscriptions'] = array (
    1 => 'Subscriptions',
);

//==== apiVersionMap Supplierinvoices ====

$o['apiVersionMap']['Supplierinvoices'] = array (
    1 => 'Supplierinvoices',
);

//==== apiVersionMap Supplierorders ====

$o['apiVersionMap']['Supplierorders'] = array (
    1 => 'Supplierorders',
);

//==== apiVersionMap Supplierproposals ====

$o['apiVersionMap']['Supplierproposals'] = array (
    1 => 'Supplierproposals',
);

//==== apiVersionMap Tasks ====

$o['apiVersionMap']['Tasks'] = array (
    1 => 'Tasks',
);

//==== apiVersionMap Thirdparties ====

$o['apiVersionMap']['Thirdparties'] = array (
    1 => 'Thirdparties',
);

//==== apiVersionMap Users ====

$o['apiVersionMap']['Users'] = array (
    1 => 'Users',
);

//==== apiVersionMap Warehouses ====

$o['apiVersionMap']['Warehouses'] = array (
    1 => 'Warehouses',
);
return $o;