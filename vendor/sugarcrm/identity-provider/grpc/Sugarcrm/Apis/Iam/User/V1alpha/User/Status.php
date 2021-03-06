<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/user/v1alpha/user.proto

namespace Sugarcrm\Apis\Iam\User\V1alpha\User;

use UnexpectedValueException;

/**
 * Indicates if the user object is enabled
 *
 * Protobuf type <code>sugarcrm.apis.iam.user.v1alpha.User.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>ACTIVE = 0;</code>
     */
    const ACTIVE = 0;
    /**
     * Generated from protobuf enum <code>INACTIVE = 1;</code>
     */
    const INACTIVE = 1;

    private static $valueToName = [
        self::ACTIVE => 'ACTIVE',
        self::INACTIVE => 'INACTIVE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Sugarcrm\Apis\Iam\User\V1alpha\User_Status::class);

