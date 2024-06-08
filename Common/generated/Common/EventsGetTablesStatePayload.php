<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.EventsGetTablesStatePayload</code>
 */
class EventsGetTablesStatePayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 event_id = 1;</code>
     */
    protected $event_id = 0;
    /**
     * Generated from protobuf field <code>bool omit_last_round = 2;</code>
     */
    protected $omit_last_round = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $event_id
     *     @type bool $omit_last_round
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 event_id = 1;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>int32 event_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkInt32($var);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool omit_last_round = 2;</code>
     * @return bool
     */
    public function getOmitLastRound()
    {
        return $this->omit_last_round;
    }

    /**
     * Generated from protobuf field <code>bool omit_last_round = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOmitLastRound($var)
    {
        GPBUtil::checkBool($var);
        $this->omit_last_round = $var;

        return $this;
    }

}

