<?php
$viewdefs['Quotes'] = 
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
                'type' => 'convert-to-opportunity',
                'event' => 'button:convert_to_opportunity:click',
                'name' => 'convert_to_opportunity_button',
                'label' => 'LBL_QUOTE_TO_OPPORTUNITY_LABEL',
                'acl_module' => 'Opportunities',
                'acl_action' => 'create',
              ),
              6 => 
              array (
                'type' => 'divider',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Quotes',
                'acl_action' => 'create',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              10 => 
              array (
                'type' => 'divider',
              ),
              11 => 
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
            'label' => 'LBL_PANEL_HEADER',
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
                'events' => 
                array (
                  'keyup' => 'update:quote',
                ),
                'related_fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'bundles',
                    'fields' => 
                    array (
                      0 => 'id',
                      1 => 'bundle_stage',
                      2 => 'currency_id',
                      3 => 'base_rate',
                      4 => 'currencies',
                      5 => 'name',
                      6 => 'deal_tot',
                      7 => 'deal_tot_usdollar',
                      8 => 'deal_tot_discount_percentage',
                      9 => 'new_sub',
                      10 => 'new_sub_usdollar',
                      11 => 'position',
                      12 => 'related_records',
                      13 => 'shipping',
                      14 => 'shipping_usdollar',
                      15 => 'subtotal',
                      16 => 'subtotal_usdollar',
                      17 => 'tax',
                      18 => 'tax_usdollar',
                      19 => 'taxrate_id',
                      20 => 'team_count',
                      21 => 'team_count_link',
                      22 => 'team_name',
                      23 => 'taxable_subtotal',
                      24 => 'total',
                      25 => 'total_usdollar',
                      26 => 'default_group',
                      27 => 
                      array (
                        'name' => 'product_bundle_items',
                        'fields' => 
                        array (
                          0 => 'icc_product_image',
                          1 => 'product_template_name',
                          2 => 'quantity',
                          3 => 'list_price',
                          4 => 'planerreferenz',
                          5 => 'bemerkung',
                          6 => 'total_amount',
                          7 => 'base_rate',
                          8 => 'deal_calc',
                          9 => 'discount_amount',
                          10 => 'discount_price',
                          11 => 'discount_select',
                          12 => 'quantity',
                          13 => 'subtotal',
                          14 => 'tax_class',
                          15 => 'total_amount',
                          16 => 'description',
                          17 => 'currency_id',
                          18 => 'quote_id',
                          19 => 'name',
                          20 => 'position',
                          21 => 'product_template_id',
                          22 => 'product_template_name',
                        ),
                        'max_num' => -1,
                      ),
                    ),
                    'max_num' => -1,
                    'order_by' => 'position:asc',
                  ),
                ),
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
                'name' => 'converted',
                'label' => 'LBL_CONVERTED',
                'type' => 'badge',
                'readonly' => true,
                'dismiss_label' => true,
                'related_fields' => 
                array (
                  0 => 'opportunity_id',
                ),
                'badge_compare' => 
                array (
                  'comparison' => 'notEmpty',
                ),
                'badge_label_map' => 
                array (
                  'false' => 'LBL_NOT_CONVERTED',
                  'true' => 'LBL_CONVERTED',
                ),
                'css_class_map' => 
                array (
                  'false' => '',
                  'true' => 'label-success',
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'billing_contact_name',
              1 => 'original_po_date',
              2 => 'quote_num',
              3 => 
              array (
                'name' => 'opportunity_name',
                'related_fields' => 
                array (
                  0 => 'subtotal',
                  1 => 'discount',
                  2 => 'new_sub',
                  3 => 'tax',
                  4 => 'shipping',
                ),
              ),
              4 => 'date_quote_expected_closed',
              5 => 
              array (
                'name' => 'statistik',
                'label' => 'ICC_LBL_STATISTIK',
              ),
              6 => 'quote_stage',
              7 => 'billing_account_name',
              8 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
              ),
              9 => 
              array (
              ),
              10 => 
              array (
                'name' => 'shipping_address_postalcode',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
              ),
              11 => 
              array (
              ),
              12 => 
              array (
                'name' => 'shipping_address_city',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              ),
              13 => 
              array (
              ),
              14 => 
              array (
                'name' => 'shipping_address_country',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              ),
              15 => 
              array (
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'panelDefault' => 'collapsed',
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'assigned_user_name',
              2 => 'team_name',
              3 => 
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
              4 => 
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
