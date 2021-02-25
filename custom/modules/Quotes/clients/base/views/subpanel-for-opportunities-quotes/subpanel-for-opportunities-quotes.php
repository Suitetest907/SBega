<?php
// created: 2020-08-05 10:55:38
$viewdefs['Quotes']['base']['view']['subpanel-for-opportunities-quotes'] = array (
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
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'account_name',
          'sortable' => false,
          'readonly' => true,
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'default' => true,
          'name' => 'total_usdollar',
          'readonly' => true,
        ),
        3 => 
        array (
          'name' => 'statistik',
          'label' => 'ICC_LBL_STATISTIK',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'fa-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'acl_action' => 'edit',
        'event' => 'list:editrow:fire',
      ),
      1 => 
      array (
        'type' => 'pdfaction',
        'name' => 'download-pdf',
        'label' => 'LBL_PDF_VIEW',
        'action' => 'download',
        'acl_action' => 'view',
      ),
      2 => 
      array (
        'type' => 'unlink-action',
        'name' => 'unlink_button',
        'icon' => 'fa-trash-o',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);