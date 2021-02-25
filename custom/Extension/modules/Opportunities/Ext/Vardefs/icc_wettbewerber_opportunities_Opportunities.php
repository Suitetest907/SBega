<?php
// created: 2020-08-12 13:44:04
$dictionary["Opportunity"]["fields"]["icc_apach_wettbewerber"] = array (
  'name' => 'icc_apach_wettbewerber',
  'type' => 'link',
  'relationship' => 'icc_wettbewerber_opportunities',
  'source' => 'non-db',
  'module' => 'Apach_Wettbewerber',
  'bean_name' => 'Apach_Wettbewerber',
  'vname' => 'LBL_ICC_WETTBEWERBER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'id',
  'link-type' => 'many',
  'side' => 'left',
);
