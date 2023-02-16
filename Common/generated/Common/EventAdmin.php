<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frey.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.EventAdmin</code>
 */
class EventAdmin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 ruleId = 1;</code>
     */
    protected $ruleId = 0;
    /**
     * Generated from protobuf field <code>int32 personId = 2;</code>
     */
    protected $personId = 0;
    /**
     * Generated from protobuf field <code>string personName = 3;</code>
     */
    protected $personName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ruleId
     *     @type int $personId
     *     @type string $personName
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

    /**
     * Generated from protobuf field <code>int32 personId = 2;</code>
     * @return int
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Generated from protobuf field <code>int32 personId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPersonId($var)
    {
        GPBUtil::checkInt32($var);
        $this->personId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string personName = 3;</code>
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Generated from protobuf field <code>string personName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPersonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->personName = $var;

        return $this;
    }

}

