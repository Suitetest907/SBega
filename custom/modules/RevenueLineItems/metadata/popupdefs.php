<?php
$popupMeta = array (
    'moduleMain' => 'RevenueLineItems',
    'varName' => 'RLI',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'revenue_line_items.name',
  'account_name' => 'accounts.name',
  'opportunity_name' => 'opportunities.name',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
  2 => 'opportunity_name',
),
    'searchdefs' => array (
  0 => 'name',
  1 => 
  array (
    'name' => 'account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
  ),
  2 => 
  array (
    'name' => 'opportunity_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
  ),
  3 => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'OPPORTUNITY_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'id' => 'OPPORTUNITY_ID',
    'module' => 'Opportunities',
    'link' => true,
    'default' => true,
    'name' => 'opportunity_name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'link' => true,
    'default' => true,
    'name' => 'account_name',
  ),
),
);
