<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Access_GetRuleValue_Response</code>
 */
class Access_GetRuleValue_Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Common.RuleValue value = 1;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Common\RuleValue $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Frey::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Common.RuleValue value = 1;</code>
     * @return \Common\RuleValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>.Common.RuleValue value = 1;</code>
     * @param \Common\RuleValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Common\RuleValue::class);
        $this->value = $var;

        return $this;
    }

}

