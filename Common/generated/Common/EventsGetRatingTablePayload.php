<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.EventsGetRatingTablePayload</code>
 */
class EventsGetRatingTablePayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 event_id_list = 1;</code>
     */
    private $event_id_list;
    /**
     * Generated from protobuf field <code>string order_by = 2;</code>
     */
    protected $order_by = '';
    /**
     * Generated from protobuf field <code>string order = 3;</code>
     */
    protected $order = '';
    /**
     * &#64;deprecated
     *
     * Generated from protobuf field <code>optional bool with_prefinished = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $with_prefinished = null;
    /**
     * Generated from protobuf field <code>optional bool only_min_games = 5;</code>
     */
    protected $only_min_games = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $event_id_list
     *     @type string $order_by
     *     @type string $order
     *     @type bool $with_prefinished
     *           &#64;deprecated
     *     @type bool $only_min_games
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 event_id_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventIdList()
    {
        return $this->event_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated int32 event_id_list = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->event_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string order_by = 2;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Generated from protobuf field <code>string order_by = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string order = 3;</code>
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Generated from protobuf field <code>string order = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->order = $var;

        return $this;
    }

    /**
     * &#64;deprecated
     *
     * Generated from protobuf field <code>optional bool with_prefinished = 4 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getWithPrefinished()
    {
        @trigger_error('with_prefinished is deprecated.', E_USER_DEPRECATED);
        return isset($this->with_prefinished) ? $this->with_prefinished : false;
    }

    public function hasWithPrefinished()
    {
        @trigger_error('with_prefinished is deprecated.', E_USER_DEPRECATED);
        return isset($this->with_prefinished);
    }

    public function clearWithPrefinished()
    {
        @trigger_error('with_prefinished is deprecated.', E_USER_DEPRECATED);
        unset($this->with_prefinished);
    }

    /**
     * &#64;deprecated
     *
     * Generated from protobuf field <code>optional bool with_prefinished = 4 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setWithPrefinished($var)
    {
        @trigger_error('with_prefinished is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->with_prefinished = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool only_min_games = 5;</code>
     * @return bool
     */
    public function getOnlyMinGames()
    {
        return isset($this->only_min_games) ? $this->only_min_games : false;
    }

    public function hasOnlyMinGames()
    {
        return isset($this->only_min_games);
    }

    public function clearOnlyMinGames()
    {
        unset($this->only_min_games);
    }

    /**
     * Generated from protobuf field <code>optional bool only_min_games = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnlyMinGames($var)
    {
        GPBUtil::checkBool($var);
        $this->only_min_games = $var;

        return $this;
    }

}

