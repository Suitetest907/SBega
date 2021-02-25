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

$module_name = 'ICC_ActiveSalesTiles'; $viewdefs[$module_name] = [ 'mobile' => [ 'view' => [ 'edit' => [ 'templateMeta' => [ 'maxColumns' => '1', 'widths' => [ 0 => [ 'label' => '10', 'field' => '30', ], 1 => [ 'label' => '10', 'field' => '30', ], ], ], 'panels' => [ 0 => [ 'label' => 'LBL_PANEL_DEFAULT', 'name' => 'LBL_PANEL_DEFAULT', 'columns' => '1', 'labelsOnTop' => 1, 'placeholders' => 1, 'fields' => [ 0 => [ 'name' => 'document_name', 'label' => 'LBL_DOC_NAME', ], 1 => [ 'name' => 'uploadfile', 'displayParams' => [ 'link' => 'uploadfile', 'id' => 'id', ], ], 2 => 'active_date', 3 => 'exp_date', 4 => 'assigned_user_name', ], ], ], ], ], ], ]; 