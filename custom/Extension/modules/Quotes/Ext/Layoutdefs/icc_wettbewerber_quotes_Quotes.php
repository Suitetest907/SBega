<?php
 // created: 2020-08-12 13:59:23
$layout_defs["Quotes"]["subpanel_setup"]['icc_wettbewerber_quotes'] = array (
  'order' => 100,
  'module' => 'Apach_Wettbewerber',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ICC_WETTBEWERBER_QUOTES_FROM_APACH_WETTBEWERBER_TITLE',
  'get_subpanel_data' => 'icc_wettbewerber_quotes',
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
