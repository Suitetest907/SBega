<?php
 // created: 2020-07-02 16:31:58
$layout_defs["Opportunities"]["subpanel_setup"]['icc_users_opportunities'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ICC_USERS_OPPORTUNITIES_FROM_USERS_TITLE',
  'get_subpanel_data' => 'icc_users_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
