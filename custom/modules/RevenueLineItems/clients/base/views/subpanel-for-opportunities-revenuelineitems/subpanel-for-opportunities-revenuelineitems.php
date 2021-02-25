<?php
// created: 2020-07-07 13:06:53
$viewdefs['RevenueLineItems']['base']['view']['subpanel-for-opportunities-revenuelineitems'] = array (
  'type' => 'subpanel-list',
  'favorite' => true,
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
          'name' => 'icc_product_image',
          'label' => 'LBL_ICC_PRODUCT_IMAGE',
          'enabled' => true,
          'sortable' => false,
          'width' => '180',
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'mft_part_num',
          ),
        ),
        2 => 
        array (
          'name' => 'quantity',
          'label' => 'LBL_QUANTITY',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'likely_case',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
            2 => 'total_amount',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_price',
          ),
          'showTransactionalAmount' => true,
          'convertToBase' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'worst_case',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
            2 => 'total_amount',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_price',
          ),
          'showTransactionalAmount' => true,
          'convertToBase' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'best_case',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
            2 => 'total_amount',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_price',
          ),
          'showTransactionalAmount' => true,
          'convertToBase' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'account_name',
          'readonly' => true,
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'product_template_name',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'category_name',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'quote_name',
          'label' => 'LBL_ASSOCIATED_QUOTE',
          'related_fields' => 
          array (
            0 => 'quote_id',
          ),
          'readonly' => true,
          'bwcLink' => true,
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'assigned_user_name',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'service',
          'label' => 'LBL_SERVICE',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'renewable',
            1 => 'service_duration',
            2 => 'service_start_date',
            3 => 'service_end_date',
          ),
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'service_start_date',
          'label' => 'LBL_SERVICE_START_DATE',
          'type' => 'date',
          'default' => true,
          'enabled' => true,
        ),
        13 => 
        array (
          'name' => 'service_end_date',
          'label' => 'LBL_SERVICE_END_DATE',
          'type' => 'service-enddate',
          'default' => true,
          'enabled' => true,
        ),
        14 => 
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
          'default' => true,
          'enabled' => true,
        ),
        15 => 
        array (
          'name' => 'renewable',
          'label' => 'LBL_RENEWABLE',
          'type' => 'bool',
          'default' => true,
          'enabled' => true,
        ),
        16 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        17 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_SALES_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        18 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => true,
        ),
        19 => 
        array (
          'name' => 'commit_stage',
          'label' => 'LBL_COMMIT_STAGE_FORECAST',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'probability',
          ),
          'default' => true,
        ),
        20 => 'date_closed',
        21 => 'sales_stage',
        22 => 'probability',
        23 => 'commit_stage',
        24 => 'quantity',
        25 => 'service',
      ),
    ),
  ),
  'selection' => 
  array (
    'type' => 'multi',
    'actions' => 
    array (
      0 => 
      array (
        'name' => 'quote_button',
        'type' => 'button',
        'label' => 'LBL_GENERATE_QUOTE',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:massquote:fire',
        ),
        'acl_module' => 'Quotes',
        'acl_action' => 'create',
        'related_fields' => 
        array (
          0 => 'account_id',
          1 => 'account_name',
          2 => 'assigned_user_id',
          3 => 'assigned_user_name',
          4 => 'base_rate',
          5 => 'best_case',
          6 => 'book_value',
          7 => 'category_id',
          8 => 'category_name',
          9 => 'commit_stage',
          10 => 'cost_price',
          11 => 'currency_id',
          12 => 'date_closed',
          13 => 'deal_calc',
          14 => 'likely_case',
          15 => 'list_price',
          16 => 'mft_part_num',
          17 => 'my_favorite',
          18 => 'name',
          19 => 'probability',
          20 => 'product_template_id',
          21 => 'product_template_name',
          22 => 'quote_id',
          23 => 'quote_name',
          24 => 'worst_case',
        ),
      ),
      1 => 
      array (
        'name' => 'massdelete_button',
        'type' => 'button',
        'label' => 'LBL_DELETE',
        'acl_action' => 'delete',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:massdelete:fire',
        ),
        'related_fields' => 
        array (
          0 => 'sales_stage',
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'css_class' => 'pull-right',
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'fa-eye',
        'acl_action' => 'view',
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'fa-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
      ),
    ),
  ),
);