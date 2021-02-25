<?php
$viewdefs['Users'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'first_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'last_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{if $IS_ADMIN && !$IDM_MODE_ENABLED}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
          ),
          1 => 
          array (
            'name' => 'license_type',
            'displayParams' => 
            array (
              'required' => true,
            ),
            'customCode' => '{if $IS_ADMIN}{$LICENSE_TYPE_DROPDOWN}{else}{$LICENSE_TYPE_READONLY}{/if}',
          ),
        ),
        3 => 
        array (
          0 => 'picture',
          1 => 
          array (
            'name' => 'icc_opportunities_name',
          ),
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 'title',
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 'department',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'reports_to_name',
          1 => 'phone_other',
        ),
        4 => 
        array (
          1 => 'phone_fax',
        ),
        5 => 
        array (
          1 => 'phone_home',
        ),
        6 => 
        array (
          0 => 'business_center_name',
        ),
        7 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        8 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        9 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        10 => 
        array (
          0 => 'address_country',
        ),
        11 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
