<?php

$dictionary['Opportunity']['fields']['icc_address_city'] = 
array (
  'name' => 'icc_address_city',
  'vname' => 'LBL_ICC_ADDRESS_CITY',
  'type' => 'varchar',
  'len' => '100',
  'comment' => 'The city used for icc address',
  'group' => 'icc_address',
  'merge_filter' => 'enabled',
  'duplicate_on_record_copy' => 'always',
);
$dictionary['Opportunity']['fields']['icc_address_house_number'] =
array (
  'name' => 'icc_address_house_number',
  'vname' => 'LBL_ICC_ADDRESS_HOUSE_NUMBER',
  'type' => 'varchar',
  'len' => '100',
  'group' => 'icc_address',
  'comment' => 'The house number used for icc address',
  'merge_filter' => 'enabled',
  'duplicate_on_record_copy' => 'always',
);
$dictionary['Opportunity']['fields']['icc_address_postalcode'] = 
array (
  'name' => 'icc_address_postalcode',
  'vname' => 'LBL_ICC_ADDRESS_POSTALCODE',
  'type' => 'varchar',
  'len' => '20',
  'group' => 'icc_address',
  'comment' => 'The postal code used for icc address',
  'merge_filter' => 'enabled',
  'duplicate_on_record_copy' => 'always',
);
$dictionary['Opportunity']['fields']['icc_address_country'] = 
array (
  'name' => 'icc_address_country',
  'vname' => 'LBL_ICC_ADDRESS_COUNTRY',
  'type' => 'varchar',
  'group' => 'icc_address',
  'comment' => 'The country used for the icc address',
  'merge_filter' => 'enabled',
  'duplicate_on_record_copy' => 'always',
);
$dictionary['Opportunity']['fields']['icc_address_street'] = 
array (
  'name' => 'icc_address_street',
  'vname' => 'LBL_ICC_ADDRESS_STREET',
  'type' => 'text',
  'dbType' => 'varchar',
  'len' => '150',
  'comment' => 'The street address used for icc address',
  'group' => 'icc_address',
  'group_label' => 'LBL_ICC_ADDRESS',
  'merge_filter' => 'enabled',
  'duplicate_on_record_copy' => 'always',
  'full_text_search' => 
  array (
    'enabled' => true,
    'searchable' => true,
    'boost' => 0.35,
  ),
);
