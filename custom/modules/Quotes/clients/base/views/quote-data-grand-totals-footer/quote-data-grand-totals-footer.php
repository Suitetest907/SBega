<?php
// created: 2020-12-16 15:55:48
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-footer'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_quote_data_grand_totals_footer',
      'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_FOOTER',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'tax',
          'type' => 'currency',
        ),
        1 => 
        array (
          'name' => 'total',
          'type' => 'currency',
          'css_class' => 'grand-total',
        ),
      ),
    ),
  ),
);