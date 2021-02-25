<?php
$viewdefs['ProductTemplates'] = 
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
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
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
                'name' => 'status',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'qty_in_stock',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'type_name',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'category_name',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
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
            ),
          ),
        ),
      ),
    ),
  ),
);
