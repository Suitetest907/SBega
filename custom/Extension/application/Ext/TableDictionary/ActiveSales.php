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

 $dictionary['icc_activesalestiles_teams'] = [ 'table' => 'icc_activesalestiles_teams', 'fields' => [ 'id' => [ 'name' => 'id', 'type' => 'varchar', 'len' => '36', ], 'activesalestile_id' => [ 'name' => 'activesalestile_id', 'type' => 'varchar', 'len' => '36', ], 'team_id' => [ 'name' => 'team_id', 'type' => 'varchar', 'len' => '36', ], 'date_modified' => [ 'name' => 'date_modified', 'type' => 'datetime', ], 'deleted' => [ 'name' => 'deleted', 'type' => 'bool', 'len' => '1', 'required' => false, 'default' => '0', ], ], 'indices' => [ [ 'name' => 'idx_activesalestiles_teamsspk', 'type' => 'primary', 'fields' => [ 'id', ], ], [ 'name' => 'idx_activesalestiles_teams', 'type' => 'index', 'fields' => [ 'activesalestile_id', 'team_id' ], ], [ 'name' => 'idx_activesalestiles_teams_ast', 'type' => 'index', 'fields' => [ 'activesalestile_id', ], ], [ 'name' => 'idx_activesalestiles_teams_team', 'type' => 'index', 'fields' => [ 'team_id' ], ], ], 'relationships' => [ 'icc_activesalestiles_teams' => [ 'lhs_module' => 'ICC_ActiveSalesTiles', 'lhs_table' => 'icc_activesalestiles', 'lhs_key' => 'id', 'rhs_module' => 'Teams', 'rhs_table' => 'teams', 'rhs_key' => 'id', 'relationship_type' => 'many-to-many', 'join_table' => 'icc_activesalestiles_teams', 'join_key_lhs' => 'activesalestile_id', 'join_key_rhs' => 'team_id', ], ] ]; $dictionary['icc_activesalestiles_users'] = [ 'table' => 'icc_activesalestiles_users', 'fields' => [ 'id' => [ 'name' => 'id', 'type' => 'varchar', 'len' => '36', ], 'activesalestile_id' => [ 'name' => 'activesalestile_id', 'type' => 'varchar', 'len' => '36', ], 'user_id' => [ 'name' => 'user_id', 'type' => 'varchar', 'len' => '36', ], 'date_modified' => [ 'name' => 'date_modified', 'type' => 'datetime', ], 'deleted' => [ 'name' => 'deleted', 'type' => 'bool', 'len' => '1', 'required' => false, 'default' => '0', ], ], 'indices' => [ [ 'name' => 'idx_activesalestiles_usersspk', 'type' => 'primary', 'fields' => [ 'id', ], ], [ 'name' => 'idx_activesalestiles_users', 'type' => 'index', 'fields' => [ 'activesalestile_id', 'user_id' ], ], [ 'name' => 'idx_activesalestiles_users_ast', 'type' => 'index', 'fields' => [ 'activesalestile_id', ], ], [ 'name' => 'idx_activesalestiles_users_user', 'type' => 'index', 'fields' => [ 'user_id' ], ], ], 'relationships' => [ 'icc_activesalestiles_users' => [ 'lhs_module' => 'ICC_ActiveSalesTiles', 'lhs_table' => 'icc_activesalestiles', 'lhs_key' => 'id', 'rhs_module' => 'Users', 'rhs_table' => 'users', 'rhs_key' => 'id', 'relationship_type' => 'many-to-many', 'join_table' => 'icc_activesalestiles_users', 'join_key_lhs' => 'activesalestile_id', 'join_key_rhs' => 'user_id', ], ] ]; $dictionary['icc_activesalestiles_roles'] = [ 'table' => 'icc_activesalestiles_roles', 'fields' => [ 'id' => [ 'name' => 'id', 'type' => 'varchar', 'len' => '36', ], 'activesalestile_id' => [ 'name' => 'activesalestile_id', 'type' => 'varchar', 'len' => '36', ], 'role_id' => [ 'name' => 'role_id', 'type' => 'varchar', 'len' => '36', ], 'date_modified' => [ 'name' => 'date_modified', 'type' => 'datetime', ], 'deleted' => [ 'name' => 'deleted', 'type' => 'bool', 'len' => '1', 'required' => false, 'default' => '0', ], ], 'indices' => [ [ 'name' => 'idx_activesalestiles_rolesspk', 'type' => 'primary', 'fields' => [ 'id', ], ], [ 'name' => 'idx_activesalestiles_roles', 'type' => 'index', 'fields' => [ 'activesalestile_id', 'role_id' ], ], [ 'name' => 'idx_activesalestiles_roles_ast', 'type' => 'index', 'fields' => [ 'activesalestile_id', ], ], [ 'name' => 'idx_activesalestiles_roles_role', 'type' => 'index', 'fields' => [ 'role_id' ], ], ], 'relationships' => [ 'icc_activesalestiles_roles' => [ 'lhs_module' => 'ICC_ActiveSalesTiles', 'lhs_table' => 'icc_activesalestiles', 'lhs_key' => 'id', 'rhs_module' => 'ACLRoles', 'rhs_table' => 'acl_roles', 'rhs_key' => 'id', 'relationship_type' => 'many-to-many', 'join_table' => 'icc_activesalestiles_roles', 'join_key_lhs' => 'activesalestile_id', 'join_key_rhs' => 'role_id', ], ] ];