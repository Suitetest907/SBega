<?php
$viewdefs['Products'] = 
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
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_MODULE_NAME_SINGULAR',
              ),
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
              0 => 
              array (
                'name' => 'icc_product_image',
                'studio' => 'visible',
                'label' => 'LBL_ICC_PRODUCT_IMAGE',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'product_template_name',
                'label' => 'LBL_PRODUCT_TEMPLATE',
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              3 => 
              array (
              ),
              4 => 
              array (
              ),
              5 => 
              array (
                'name' => 'quote_name',
                'label' => 'LBL_QUOTE_NAME',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'quote_id',
                ),
              ),
              6 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
              ),
              7 => 'quantity',
              8 => 
              array (
                'name' => 'list_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'list_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              9 => 'mft_part_num',
              10 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
              11 => 
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
              12 => 'service',
              13 => 
              array (
                'name' => 'service_start_date',
                'label' => 'LBL_SERVICE_START_DATE',
                'type' => 'date',
              ),
              14 => 
              array (
                'name' => 'service_end_date',
                'label' => 'LBL_SERVICE_END_DATE',
                'type' => 'service-enddate',
              ),
              15 => 
              array (
                'name' => 'renewable',
                'label' => 'LBL_RENEWABLE',
                'type' => 'bool',
              ),
              16 => 'contact_name',
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 'team_name',
              2 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              4 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
        ),
      ),
    ),
  ),
);
