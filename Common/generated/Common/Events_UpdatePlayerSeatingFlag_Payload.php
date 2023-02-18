<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Events_UpdatePlayerSeatingFlag_Payload</code>
 */
class Events_UpdatePlayerSeatingFlag_Payload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 playerId = 1;</code>
     */
    protected $playerId = 0;
    /**
     * Generated from protobuf field <code>int32 eventId = 2;</code>
     */
    protected $eventId = 0;
    /**
     * Generated from protobuf field <code>bool ignoreSeating = 3;</code>
     */
    protected $ignoreSeating = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $playerId
     *     @type int $eventId
     *     @type bool $ignoreSeating
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 playerId = 1;</code>
     * @return int
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Generated from protobuf field <code>int32 playerId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->playerId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 eventId = 2;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Generated from protobuf field <code>int32 eventId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkInt32($var);
        $this->eventId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ignoreSeating = 3;</code>
     * @return bool
     */
    public function getIgnoreSeating()
    {
        return $this->ignoreSeating;
    }

    /**
     * Generated from protobuf field <code>bool ignoreSeating = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreSeating($var)
    {
        GPBUtil::checkBool($var);
        $this->ignoreSeating = $var;

        return $this;
    }

}

