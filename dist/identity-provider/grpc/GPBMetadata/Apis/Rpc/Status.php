<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/rpc/status.proto

namespace GPBMetadata\Apis\Rpc;

class Status
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab1010a15617069732f7270632f7374617475732e70726f746f12117375" .
            "67617263726d2e617069732e727063224e0a06537461747573120c0a0463" .
            "6f6465180120012805120f0a076d65737361676518022001280912250a07" .
            "64657461696c7318032003280b32142e676f6f676c652e70726f746f6275" .
            "662e416e79422d5a2b6769746875622e636f6d2f737567617263726d2f6d" .
            "756c746976657273652f617069732f7270633b727063620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

