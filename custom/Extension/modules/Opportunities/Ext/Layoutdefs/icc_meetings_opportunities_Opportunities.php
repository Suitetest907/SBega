<?php
 // created: 2020-08-05 16:01:23
$layout_defs["Opportunities"]["subpanel_setup"]['icc_meetings_opportunities'] = array (
  'order' => 100,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ICC_MEETINGS_OPPORTUNITIES_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'icc_meetings_opportunities',
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
