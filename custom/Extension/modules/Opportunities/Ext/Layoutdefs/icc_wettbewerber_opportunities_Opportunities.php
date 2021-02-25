<?php
 // created: 2020-08-12 13:44:04
$layout_defs["Opportunities"]["subpanel_setup"]['icc_wettbewerber_opportunities'] = array (
  'order' => 100,
  'module' => 'Apach_Wettbewerber',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ICC_WETTBEWERBER_OPPORTUNITIES_FROM_APACH_WETTBEWERBER_TITLE',
  'get_subpanel_data' => 'icc_wettbewerber_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
