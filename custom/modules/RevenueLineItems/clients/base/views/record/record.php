<?php
$viewdefs['RevenueLineItems'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'primary' => true,
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'convert-to-quote',
                'event' => 'button:convert_to_quote:click',
                'name' => 'convert_to_quote_button',
                'label' => 'LBL_CONVERT_TO_QUOTE',
                'acl_module' => 'Quotes',
                'acl_action' => 'create',
              ),
              6 => 
              array (
                'type' => 'divider',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'RevenueLineItems',
                'acl_action' => 'create',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'divider',
              ),
              12 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
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
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
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
              4 => 
              array (
                'name' => 'probability',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'commit_stage',
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'date_closed',
                'related_fields' => 
                array (
                  0 => 'date_closed_timestamp',
                ),
                'span' => 6,
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
                'span' => 12,
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
              ),
              14 => 
              array (
                'name' => 'description',
                'span' => 12,
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
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
