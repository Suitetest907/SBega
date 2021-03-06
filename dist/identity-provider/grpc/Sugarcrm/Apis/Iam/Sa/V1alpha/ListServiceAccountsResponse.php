<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/sa/v1alpha/sa.proto

namespace Sugarcrm\Apis\Iam\Sa\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.sa.v1alpha.ListServiceAccountsResponse</code>
 */
class ListServiceAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.sa.v1alpha.ServiceAccount service_accounts = 1;</code>
     */
    private $service_accounts;
    /**
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Apis\Iam\Sa\V1Alpha\Sa::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.sa.v1alpha.ServiceAccount service_accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccounts()
    {
        return $this->service_accounts;
    }

    /**
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.sa.v1alpha.ServiceAccount service_accounts = 1;</code>
     * @param \Sugarcrm\Apis\Iam\Sa\V1alpha\ServiceAccount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sugarcrm\Apis\Iam\Sa\V1alpha\ServiceAccount::class);
        $this->service_accounts = $arr;

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

