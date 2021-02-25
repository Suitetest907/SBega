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

 $viewdefs['base']['view']['icc-tiles-selection-headerpane'] = array( 'template' => 'headerpane', 'fields' => array( array( 'name' => 'title', 'type' => 'label', 'default_value' => 'LBL_SEARCH_AND_SELECT', ), array( 'name' => 'collection-count', 'type' => 'icc-tiles-selection-collection-count', ), ), 'buttons' => array( array( 'name' => 'close', 'type' => 'button', 'label' => 'LBL_CANCEL_BUTTON_LABEL', 'events' => array( 'click' => 'selection:closedrawer:fire', ), 'css_class' => 'btn-invisible btn-link', ), array( 'name' => 'sidebar_toggle', 'type' => 'sidebartoggle', ), ), ); 