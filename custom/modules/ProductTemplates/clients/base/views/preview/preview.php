<?php
$viewdefs['ProductTemplates'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'preview' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'status',
              1 => 'qty_in_stock',
              2 => 'type_name',
              3 => 'category_name',
              4 => 
              array (
                'name' => 'list_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'list_usdollar',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              5 => 'tax_class',
              6 => 'manufacturer_name',
              7 => 'mft_part_num',
              8 => 'service',
              9 => 
              array (
                'name' => 'service_duration',
                'type' => 'fieldset',
                'css_class' => 'service-duration-field',
                'label' => 'LBL_SERVICE_DURATION',
                'inline' => true,
                'show_child_labels' => false,
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'service_duration_value',
                    'label' => 'LBL_SERVICE_DURATION_VALUE',
                  ),
                  1 => 
                  array (
                    'name' => 'service_duration_unit',
                    'label' => 'LBL_SERVICE_DURATION_UNIT',
                  ),
                ),
              ),
              10 => 'renewable',
              11 => 
              array (
                'name' => 'vendor_part_num',
              ),
              12 => 'weight',
              13 => 'date_available',
              14 => 
              array (
                'name' => 'website',
                'type' => 'url',
              ),
              15 => 
              array (
                'name' => 'pricing_formula',
                'related_fields' => 
                array (
                  0 => 'pricing_factor',
                ),
              ),
              16 => 
              array (
                'name' => 'description',
              ),
              17 => 'support_name',
              18 => 'support_description',
              19 => 'support_contact',
              20 => 'support_term',
              21 => 'team_name',
              22 => 
              array (
                'name' => 'tag',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
