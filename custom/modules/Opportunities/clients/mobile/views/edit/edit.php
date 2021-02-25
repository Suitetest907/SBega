<?php
$viewdefs['Opportunities'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 'amount',
              2 => 'account_name',
              3 => 'date_closed',
              4 => 'tag',
              5 => 'assigned_user_name',
              6 => 'team_name',
              7 => 
              array (
                'name' => 'commit_stage',
                'comment' => 'Forecast commit ranges: Include, Likely, Omit etc.',
                'related_fields' => 
                array (
                ),
                'studio' => true,
                'label' => 'LBL_COMMIT_STAGE_FORECAST',
              ),
              8 => 'sales_stage',
              9 => 'probability',
            ),
          ),
        ),
      ),
    ),
  ),
);
