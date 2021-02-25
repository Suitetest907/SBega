<?php
// created: 2020-12-16 15:55:48
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-header'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'quote-data-actiondropdown',
      'name' => 'panel_dropdown',
      'no_default_action' => true,
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'icon' => 'fa-plus',
          'name' => 'create_qli_button',
          'label' => 'LBL_CREATE_QLI_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_QLI_BUTTON_TOOLTIP',
        ),
        1 => 
        array (
          'type' => 'button',
          'icon' => 'fa-plus',
          'name' => 'create_comment_button',
          'label' => 'LBL_CREATE_COMMENT_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_COMMENT_BUTTON_TOOLTIP',
        ),
        2 => 
        array (
          'type' => 'button',
          'icon' => 'fa-plus',
          'name' => 'create_group_button',
          'label' => 'LBL_CREATE_GROUP_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_GROUP_BUTTON_TOOLTIP',
        ),
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_quote_data_grand_totals_header',
      'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_HEADER',
      'fields' => 
      array (
      ),
    ),
  ),
);