<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/consent/v1alpha/consent.proto

namespace Sugarcrm\Apis\Iam\Consent\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.consent.v1alpha.ListConsentsResponse</code>
 */
class ListConsentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.consent.v1alpha.Consent consents = 1;</code>
     */
    private $consents;
    /**
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Apis\Iam\Consent\V1Alpha\Consent::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.consent.v1alpha.Consent consents = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsents()
    {
        return $this->consents;
    }

    /**
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.consent.v1alpha.Consent consents = 1;</code>
     * @param \Sugarcrm\Apis\Iam\Consent\V1alpha\Consent[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sugarcrm\Apis\Iam\Consent\V1alpha\Consent::class);
        $this->consents = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

