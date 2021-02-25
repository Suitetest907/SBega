<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/user/v1alpha/user.proto

namespace Sugarcrm\Apis\Iam\User\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.user.v1alpha.CreateUserRequest</code>
 */
class CreateUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tenant = 1;</code>
     */
    private $tenant = '';
    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User user = 2;</code>
     */
    private $user = null;
    /**
     * Should we send email to the newly created user?
     *
     * Generated from protobuf field <code>bool send_email = 3;</code>
     */
    private $send_email = false;

    public function __construct() {
        \GPBMetadata\Apis\Iam\User\V1Alpha\User::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string tenant = 1;</code>
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * Generated from protobuf field <code>string tenant = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTenant($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User user = 2;</code>
     * @return \Sugarcrm\Apis\Iam\User\V1alpha\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User user = 2;</code>
     * @param \Sugarcrm\Apis\Iam\User\V1alpha\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Sugarcrm\Apis\Iam\User\V1alpha\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Should we send email to the newly created user?
     *
     * Generated from protobuf field <code>bool send_email = 3;</code>
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->send_email;
    }

    /**
     * Should we send email to the newly created user?
     *
     * Generated from protobuf field <code>bool send_email = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendEmail($var)
    {
        GPBUtil::checkBool($var);
        $this->send_email = $var;

        return $this;
    }

}

