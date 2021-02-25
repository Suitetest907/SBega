<?php
$viewdefs['RevenueLineItems'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
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
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'opportunity_name',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'readonly' => true,
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'probability',
                'enabled' => true,
                'default' => false,
              ),
              4 => 
              array (
                'name' => 'date_closed',
                'enabled' => true,
                'default' => false,
              ),
              5 => 
              array (
                'name' => 'commit_stage',
                'enabled' => true,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'product_template_name',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'category_name',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'quantity',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'likely_case',
                'required' => true,
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'convertToBase' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'best_case',
                'required' => true,
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'convertToBase' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'worst_case',
                'required' => true,
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'convertToBase' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'quote_name',
                'label' => 'LBL_ASSOCIATED_QUOTE',
                'related_fields' => 
                array (
                  0 => 'quote_id',
                ),
                'readonly' => true,
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'assigned_user_name',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
