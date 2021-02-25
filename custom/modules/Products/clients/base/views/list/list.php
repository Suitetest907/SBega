<?php
$viewdefs['Products'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
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
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'icc_product_image',
                'label' => 'LBL_ICC_PRODUCT_IMAGE',
                'enabled' => true,
                'sortable' => false,
                'width' => '120',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'default' => true,
                'enabled' => true,
              ),
              3 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'quote_name',
                'link' => true,
                'label' => 'LBL_ASSOCIATED_QUOTE',
                'related_fields' => 
                array (
                  0 => 'quote_id',
                ),
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'quantity',
                'default' => true,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'list_price',
                'label' => 'LBL_LIST_PRICE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'service',
                'default' => true,
                'enabled' => true,
              ),
              9 => 
              array (
                'name' => 'planerreferenz',
                'label' => 'ICC_LBL_PLANERREFERENZ',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
