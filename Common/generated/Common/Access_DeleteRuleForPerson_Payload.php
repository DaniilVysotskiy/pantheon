<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Access_DeleteRuleForPerson_Payload</code>
 */
class Access_DeleteRuleForPerson_Payload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     */
    protected $ruleId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ruleId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     * @return int
     */
    public function getRuleId()
    {
        return $this->ruleId;
    }

    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRuleId($var)
    {
        GPBUtil::checkInt32($var);
        $this->ruleId = $var;

        return $this;
    }

}

