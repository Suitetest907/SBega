<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/provider/v1alpha/provider.proto

namespace Sugarcrm\Apis\Iam\Provider\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.provider.v1alpha.LdapConfig</code>
 */
class LdapConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If the authenticated user does not exist one will be created using the
     * bind attribute as `User.sub_id`.
     *
     * Generated from protobuf field <code>bool auto_create_users = 1;</code>
     */
    private $auto_create_users = false;
    /**
     * Example:
     * ldap.example.com
     * ldaps://ldap.example.com (for TLS)
     * ldaps://ldap.example.com:1234 (TLS and port)
     *
     * Generated from protobuf field <code>string server = 2;</code>
     */
    private $server = '';
    /**
     * Example: ou=people,dc=example,dc=com
     *
     * Generated from protobuf field <code>string user_dn = 3;</code>
     */
    private $user_dn = '';
    /**
     * Any additional filter params to apply when authenticating users
     * e.g. is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)
     *
     * Generated from protobuf field <code>string user_filter = 4;</code>
     */
    private $user_filter = '';
    /**
     * For Binding the LDAP User
     * Examples: AD: userPrincipalName, openLDAP: userPrincipalName, Mac OS X: uid
     *
     * Generated from protobuf field <code>string bind_attribute = 5;</code>
     */
    private $bind_attribute = '';
    /**
     * For searching for the LDAP User
     * Examples:AD: userPrincipalName, openLDAP: dn, Mac OS X: dn
     *
     * Generated from protobuf field <code>string login_attribute = 6;</code>
     */
    private $login_attribute = '';
    /**
     * Bind to the LDAP server using a specific users credentials
     *
     * Generated from protobuf field <code>bool authentication = 7;</code>
     */
    private $authentication = false;
    /**
     * Used to search for the user. [May need to be fully qualified] It will bind anonymously if not provided.
     *
     * Generated from protobuf field <code>string authentication_user_dn = 8;</code>
     */
    private $authentication_user_dn = '';
    /**
     * Generated from protobuf field <code>string authentication_password = 9;</code>
     */
    private $authentication_password = '';
    /**
     * Users must be a member of a specific group
     *
     * Generated from protobuf field <code>bool group_membership = 10;</code>
     */
    private $group_membership = false;
    /**
     * Example: ou=groups,dc=example,dc=com
     *
     * Generated from protobuf field <code>string group_dn = 11;</code>
     */
    private $group_dn = '';
    /**
     * Example cn=sugarcrm
     *
     * Generated from protobuf field <code>string group_name = 12;</code>
     */
    private $group_name = '';
    /**
     * The attribute of the Group that will be used to filter against the User Attribute
     * Example: memberUid
     *
     * Generated from protobuf field <code>string group_attribute = 13;</code>
     */
    private $group_attribute = '';
    /**
     * The unique identifier of the person that will be used to check if they are a member of the group
     * Example: uid
     *
     * Generated from protobuf field <code>string user_unique_attribute = 14;</code>
     */
    private $user_unique_attribute = '';
    /**
     * Include the User DN with the User Attribute when checking group membership
     *
     * Generated from protobuf field <code>bool include_user_dn = 15;</code>
     */
    private $include_user_dn = false;

    public function __construct() {
        \GPBMetadata\Apis\Iam\Provider\V1Alpha\Provider::initOnce();
        parent::__construct();
    }

    /**
     * If the authenticated user does not exist one will be created using the
     * bind attribute as `User.sub_id`.
     *
     * Generated from protobuf field <code>bool auto_create_users = 1;</code>
     * @return bool
     */
    public function getAutoCreateUsers()
    {
        return $this->auto_create_users;
    }

    /**
     * If the authenticated user does not exist one will be created using the
     * bind attribute as `User.sub_id`.
     *
     * Generated from protobuf field <code>bool auto_create_users = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCreateUsers($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_create_users = $var;

        return $this;
    }

    /**
     * Example:
     * ldap.example.com
     * ldaps://ldap.example.com (for TLS)
     * ldaps://ldap.example.com:1234 (TLS and port)
     *
     * Generated from protobuf field <code>string server = 2;</code>
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Example:
     * ldap.example.com
     * ldaps://ldap.example.com (for TLS)
     * ldaps://ldap.example.com:1234 (TLS and port)
     *
     * Generated from protobuf field <code>string server = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServer($var)
    {
        GPBUtil::checkString($var, True);
        $this->server = $var;

        return $this;
    }

    /**
     * Example: ou=people,dc=example,dc=com
     *
     * Generated from protobuf field <code>string user_dn = 3;</code>
     * @return string
     */
    public function getUserDn()
    {
        return $this->user_dn;
    }

    /**
     * Example: ou=people,dc=example,dc=com
     *
     * Generated from protobuf field <code>string user_dn = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserDn($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_dn = $var;

        return $this;
    }

    /**
     * Any additional filter params to apply when authenticating users
     * e.g. is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)
     *
     * Generated from protobuf field <code>string user_filter = 4;</code>
     * @return string
     */
    public function getUserFilter()
    {
        return $this->user_filter;
    }

    /**
     * Any additional filter params to apply when authenticating users
     * e.g. is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)
     *
     * Generated from protobuf field <code>string user_filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_filter = $var;

        return $this;
    }

    /**
     * For Binding the LDAP User
     * Examples: AD: userPrincipalName, openLDAP: userPrincipalName, Mac OS X: uid
     *
     * Generated from protobuf field <code>string bind_attribute = 5;</code>
     * @return string
     */
    public function getBindAttribute()
    {
        return $this->bind_attribute;
    }

    /**
     * For Binding the LDAP User
     * Examples: AD: userPrincipalName, openLDAP: userPrincipalName, Mac OS X: uid
     *
     * Generated from protobuf field <code>string bind_attribute = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBindAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->bind_attribute = $var;

        return $this;
    }

    /**
     * For searching for the LDAP User
     * Examples:AD: userPrincipalName, openLDAP: dn, Mac OS X: dn
     *
     * Generated from protobuf field <code>string login_attribute = 6;</code>
     * @return string
     */
    public function getLoginAttribute()
    {
        return $this->login_attribute;
    }

    /**
     * For searching for the LDAP User
     * Examples:AD: userPrincipalName, openLDAP: dn, Mac OS X: dn
     *
     * Generated from protobuf field <code>string login_attribute = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_attribute = $var;

        return $this;
    }

    /**
     * Bind to the LDAP server using a specific users credentials
     *
     * Generated from protobuf field <code>bool authentication = 7;</code>
     * @return bool
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * Bind to the LDAP server using a specific users credentials
     *
     * Generated from protobuf field <code>bool authentication = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setAuthentication($var)
    {
        GPBUtil::checkBool($var);
        $this->authentication = $var;

        return $this;
    }

    /**
     * Used to search for the user. [May need to be fully qualified] It will bind anonymously if not provided.
     *
     * Generated from protobuf field <code>string authentication_user_dn = 8;</code>
     * @return string
     */
    public function getAuthenticationUserDn()
    {
        return $this->authentication_user_dn;
    }

    /**
     * Used to search for the user. [May need to be fully qualified] It will bind anonymously if not provided.
     *
     * Generated from protobuf field <code>string authentication_user_dn = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthenticationUserDn($var)
    {
        GPBUtil::checkString($var, True);
        $this->authentication_user_dn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string authentication_password = 9;</code>
     * @return string
     */
    public function getAuthenticationPassword()
    {
        return $this->authentication_password;
    }

    /**
     * Generated from protobuf field <code>string authentication_password = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthenticationPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->authentication_password = $var;

        return $this;
    }

    /**
     * Users must be a member of a specific group
     *
     * Generated from protobuf field <code>bool group_membership = 10;</code>
     * @return bool
     */
    public function getGroupMembership()
    {
        return $this->group_membership;
    }

    /**
     * Users must be a member of a specific group
     *
     * Generated from protobuf field <code>bool group_membership = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setGroupMembership($var)
    {
        GPBUtil::checkBool($var);
        $this->group_membership = $var;

        return $this;
    }

    /**
     * Example: ou=groups,dc=example,dc=com
     *
     * Generated from protobuf field <code>string group_dn = 11;</code>
     * @return string
     */
    public function getGroupDn()
    {
        return $this->group_dn;
    }

    /**
     * Example: ou=groups,dc=example,dc=com
     *
     * Generated from protobuf field <code>string group_dn = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupDn($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_dn = $var;

        return $this;
    }

    /**
     * Example cn=sugarcrm
     *
     * Generated from protobuf field <code>string group_name = 12;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Example cn=sugarcrm
     *
     * Generated from protobuf field <code>string group_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

    /**
     * The attribute of the Group that will be used to filter against the User Attribute
     * Example: memberUid
     *
     * Generated from protobuf field <code>string group_attribute = 13;</code>
     * @return string
     */
    public function getGroupAttribute()
    {
        return $this->group_attribute;
    }

    /**
     * The attribute of the Group that will be used to filter against the User Attribute
     * Example: memberUid
     *
     * Generated from protobuf field <code>string group_attribute = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_attribute = $var;

        return $this;
    }

    /**
     * The unique identifier of the person that will be used to check if they are a member of the group
     * Example: uid
     *
     * Generated from protobuf field <code>string user_unique_attribute = 14;</code>
     * @return string
     */
    public function getUserUniqueAttribute()
    {
        return $this->user_unique_attribute;
    }

    /**
     * The unique identifier of the person that will be used to check if they are a member of the group
     * Example: uid
     *
     * Generated from protobuf field <code>string user_unique_attribute = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setUserUniqueAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_unique_attribute = $var;

        return $this;
    }

    /**
     * Include the User DN with the User Attribute when checking group membership
     *
     * Generated from protobuf field <code>bool include_user_dn = 15;</code>
     * @return bool
     */
    public function getIncludeUserDn()
    {
        return $this->include_user_dn;
    }

    /**
     * Include the User DN with the User Attribute when checking group membership
     *
     * Generated from protobuf field <code>bool include_user_dn = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeUserDn($var)
    {
        GPBUtil::checkBool($var);
        $this->include_user_dn = $var;

        return $this;
    }

}

