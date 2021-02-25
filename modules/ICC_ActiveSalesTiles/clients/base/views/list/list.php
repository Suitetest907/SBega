<?php
/** The contents of this file are subject to the Insignio CRM Subscription
* Agreement ("License").
* By installing or using this file, You have unconditionally agreed to the
* terms and conditions of the License, and You may not use this file except in
* compliance with the License.  Under the terms of the license, You shall not,
* among other things: 1) sublicense, resell, rent, lease, redistribute, assign
* or otherwise transfer Your rights to the Software, and 2) use the Software
* for timesharing or service bureau purposes such as hosting the Software for
* commercial gain and/or for the benefit of a third party.  Use of the Software
* may be subject to applicable fees and any use of the Software without first
* paying applicable fees is strictly prohibited.  You do not have the right to
* remove Insignio CRM copyrights from the source code or user interface.
*
* Your Warranty, Limitations of liability and Indemnity are expressly stated
* in the License.  Please refer to the License for the specific language
* governing these rights and limitations under the License.  Portions created
* by Insignio CRM are Copyright (C) 2019 Insignio CRM GmbH. All Rights Reserved.*/

$module_name = 'ICC_ActiveSalesTiles'; $viewdefs[$module_name] = [ 'base' => [ 'view' => [ 'list' => [ 'panels' => [ 0 => [ 'label' => 'LBL_PANEL_DEFAULT', 'fields' => [ 0 => [ 'name' => 'name', 'label' => 'LBL_NAME', 'link' => true, 'default' => true, 'enabled' => true, ], 1 => [ 'name' => 'list_priority', 'label' => 'LBL_LIST_PRIORITY', 'enabled' => true, 'default' => true, ], 2 => [ 'name' => 'main_module', 'label' => 'LBL_MAIN_MODULE', 'enabled' => true, 'default' => true, ], 3 => [ 'name' => 'data_type', 'label' => 'LBL_DATA_TYPE', 'enabled' => true, 'default' => true, ], 4 => [ 'name' => 'active_date', 'label' => 'LBL_LIST_ACTIVE_DATE', 'default' => true, 'enabled' => true, ], 5 => [ 'name' => 'exp_date', 'label' => 'LBL_LIST_EXP_DATE', 'default' => true, 'enabled' => true, ], 6 => [ 'name' => 'date_modified', 'enabled' => true, 'default' => true, ], 7 => [ 'name' => 'modified_by_name', 'label' => 'LBL_MODIFIED_USER', 'module' => 'Users', 'id' => 'USERS_ID', 'default' => false, 'sortable' => false, 'related_fields' => [ 0 => 'modified_user_id', ], 'enabled' => true, ], 8 => [ 'name' => 'date_entered', 'enabled' => true, 'default' => false, ], ], ], ], ], ], ], ]; 