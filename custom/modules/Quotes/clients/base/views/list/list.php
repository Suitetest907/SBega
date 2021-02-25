<?php
$viewdefs['Quotes'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'LBL_LIST_QUOTE_NUM',
                'enabled' => true,
                'default' => true,
                'name' => 'quote_num',
              ),
              1 => 
              array (
                'label' => 'LBL_LIST_QUOTE_NAME',
                'enabled' => true,
                'default' => true,
                'name' => 'name',
                'link' => true,
              ),
              2 => 
              array (
                'target_record_key' => 'billing_account_id',
                'target_module' => 'Accounts',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'name' => 'billing_account_name',
                'sortable' => false,
              ),
              3 => 
              array (
                'label' => 'LBL_QUOTE_STAGE',
                'enabled' => true,
                'default' => true,
                'name' => 'quote_stage',
              ),
              4 => 
              array (
                'name' => 'statistik',
                'label' => 'ICC_LBL_STATISTIK',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'label' => 'LBL_TOTAL',
                'enabled' => true,
                'default' => true,
                'name' => 'total',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                ),
              ),
              6 => 
              array (
                'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
                'enabled' => true,
                'default' => true,
                'name' => 'total_usdollar',
              ),
              7 => 
              array (
                'name' => 'date_quote_expected_closed',
                'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'target_record_key' => 'assigned_user_id',
                'target_module' => 'Employees',
                'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              9 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
