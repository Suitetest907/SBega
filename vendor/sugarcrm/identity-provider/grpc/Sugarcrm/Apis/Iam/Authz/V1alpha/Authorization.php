<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/authz/v1alpha/authz.proto

namespace Sugarcrm\Apis\Iam\Authz\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.authz.v1alpha.Authorization</code>
 */
class Authorization extends \Google\Protobuf\Internal\Message
{
    /**
     * True if authorized
     *
     * Generated from protobuf field <code>bool authorized = 1;</code>
     */
    private $authorized = false;
    /**
     * Trace identifier
     *
     * Generated from protobuf field <code>string trace_id = 2;</code>
     */
    private $trace_id = '';
    /**
     * Token claims
     *
     * Generated from protobuf field <code>map<string, string> claims = 3;</code>
     */
    private $claims;

    public function __construct() {
        \GPBMetadata\Apis\Iam\Authz\V1Alpha\Authz::initOnce();
        parent::__construct();
    }

    /**
     * True if authorized
     *
     * Generated from protobuf field <code>bool authorized = 1;</code>
     * @return bool
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }

    /**
     * True if authorized
     *
     * Generated from protobuf field <code>bool authorized = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAuthorized($var)
    {
        GPBUtil::checkBool($var);
        $this->authorized = $var;

        return $this;
    }

    /**
     * Trace identifier
     *
     * Generated from protobuf field <code>string trace_id = 2;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Trace identifier
     *
     * Generated from protobuf field <code>string trace_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * Token claims
     *
     * Generated from protobuf field <code>map<string, string> claims = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * Token claims
     *
     * Generated from protobuf field <code>map<string, string> claims = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setClaims($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->claims = $arr;

        return $this;
    }

}

