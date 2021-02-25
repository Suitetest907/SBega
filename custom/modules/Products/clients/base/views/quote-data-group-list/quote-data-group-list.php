<?php
// created: 2020-12-11 15:14:14
$viewdefs['Products']['base']['view']['quote-data-group-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'products_quote_data_group_list',
      'label' => 'LBL_PRODUCTS_QUOTE_DATA_LIST',
      'fields' => 
      array (

        array (
          'name' => 'line_num',
          'label' => NULL,
          'widthClass' => 'cell-xsmall',
          'css_class' => 'line_num tcenter',
          'type' => 'line-num',
          'readonly' => true,
        ),
 
        array (
          'name' => 'icc_product_image',
          'type' => 'image',
          'label' => 'LBL_ICC_PRODUCT_IMAGE',
          'labelModule' => 'Products',
          'readonly' => true,
        ),

        array (
          'name' => 'product_template_name',
          'type' => 'quote-data-relate',
          'label' => 'Line Item',
          'labelModule' => 'Products',
          'required' => true,
        ),

        array (
          'name' => 'quantity',
          'label' => 'Quantity',
          'labelModule' => 'Products',
          'type' => 'float',
        ),

        array (
          'name' => 'list_price',
          'type' => 'currency',
          'label' => 'LBL_LIST_PRICE',
          'labelModule' => 'Products',
        ),

        array(
          'name' => 'icc_apach_wettbewerber_name',
        ),

        array (
          'name' => 'planerreferenz',
          'type' => 'textarea',
          'label' => 'ICC_LBL_PLANERREFERENZ',
          'labelModule' => 'Products',
        ),

        array (
          'name' => 'bemerkung',
          'type' => 'textarea',
          'label' => 'ICC_LBL_BEMERKUNG',
          'labelModule' => 'Products',
        ),

        array (
          'name' => 'total_amount',
          'label' => 'Produktsumme',
          'labelModule' => 'Products',
          'type' => 'currency',
        ),
      ),
    ),
  ),
);