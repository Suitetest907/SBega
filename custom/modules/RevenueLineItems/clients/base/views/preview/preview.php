<?php
$viewdefs['RevenueLineItems'] = 
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
              4 => 
              array (
                'type' => 'badge',
                'name' => 'quote_id',
                'event' => 'button:convert_to_quote:click',
                'readonly' => true,
                'tooltip' => 'LBL_CONVERT_RLI_TO_QUOTE',
                'acl_module' => 'RevenueLineItems',
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
              ),
              1 => 
              array (
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'opportunity_name',
                'filter_relate' => 
                array (
                  'account_id' => 'account_id',
                ),
              ),
              3 => 
              array (
                'name' => 'account_name',
                'readonly' => true,
              ),
              4 => 'probability',
              5 => 
              array (
                'name' => 'commit_stage',
              ),
              6 => 
              array (
                'name' => 'date_closed',
                'related_fields' => 
                array (
                  0 => 'date_closed_timestamp',
                ),
              ),
              7 => 'product_template_name',
              8 => 
              array (
                'name' => 'category_name',
                'type' => 'relate',
                'label' => 'LBL_CATEGORY',
              ),
              9 => 'quantity',
              10 => 
              array (
                'name' => 'discount_price',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'discount_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              11 => 
              array (
                'name' => 'discount_amount',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'discount_amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              12 => 
              array (
                'name' => 'total_amount',
                'type' => 'currency',
                'label' => 'LBL_CALCULATED_LINE_ITEM_AMOUNT',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'total_amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              13 => 
              array (
                'name' => 'likely_case',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'likely_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              14 => 
              array (
                'name' => 'quote_name',
                'label' => 'LBL_ASSOCIATED_QUOTE',
                'related_fields' => 
                array (
                  0 => 'mft_part_num',
                ),
                'readonly' => true,
              ),
              15 => 
              array (
                'name' => 'tag',
              ),
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
              0 => 
              array (
                'name' => 'best_case',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'best_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              1 => 
              array (
                'name' => 'worst_case',
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'worst_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              2 => 
              array (
                'name' => 'renewable',
                'label' => 'LBL_RENEWABLE',
                'type' => 'bool',
              ),
              3 => 
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
              4 => 'service',
              5 => 
              array (
                'name' => 'service_start_date',
                'label' => 'LBL_SERVICE_START_DATE',
                'type' => 'date',
              ),
              6 => 
              array (
                'name' => 'service_end_date',
                'label' => 'LBL_SERVICE_END_DATE',
                'type' => 'service-enddate',
              ),
              7 => 'next_step',
              8 => 'product_type',
              9 => 'lead_source',
              10 => 'campaign_name',
              11 => 'assigned_user_name',
              12 => 
              array (
                'name' => 'team_name',
              ),
              13 => 
              array (
                'span' => 12,
              ),
              14 => 
              array (
                'name' => 'description',
              ),
              15 => 
              array (
                'name' => 'list_price',
                'readonly' => true,
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
              16 => 'tax_class',
              17 => 
              array (
                'name' => 'cost_price',
                'readonly' => true,
                'type' => 'currency',
                'related_fields' => 
                array (
                  0 => 'cost_price',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              18 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'inline' => true,
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
              19 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'inline' => true,
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
              20 => 
              array (
                'span' => 12,
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
