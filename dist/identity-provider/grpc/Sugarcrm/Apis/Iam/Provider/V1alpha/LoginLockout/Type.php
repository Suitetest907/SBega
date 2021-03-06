<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/provider/v1alpha/provider.proto

namespace Sugarcrm\Apis\Iam\Provider\V1alpha\LoginLockout;

use UnexpectedValueException;

/**
 * Protobuf type <code>sugarcrm.apis.iam.provider.v1alpha.LoginLockout.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>DISABLED = 0;</code>
     */
    const DISABLED = 0;
    /**
     * Generated from protobuf enum <code>PERMANENT = 1;</code>
     */
    const PERMANENT = 1;
    /**
     * Generated from protobuf enum <code>TIME = 2;</code>
     */
    const TIME = 2;

    private static $valueToName = [
        self::DISABLED => 'DISABLED',
        self::PERMANENT => 'PERMANENT',
        self::TIME => 'TIME',
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
class_alias(Type::class, \Sugarcrm\Apis\Iam\Provider\V1alpha\LoginLockout_Type::class);

