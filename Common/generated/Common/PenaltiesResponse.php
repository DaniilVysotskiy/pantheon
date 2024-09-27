<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.PenaltiesResponse</code>
 */
class PenaltiesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .common.Penalty penalties = 1;</code>
     */
    private $penalties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Common\Penalty>|\Google\Protobuf\Internal\RepeatedField $penalties
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .common.Penalty penalties = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPenalties()
    {
        return $this->penalties;
    }

    /**
     * Generated from protobuf field <code>repeated .common.Penalty penalties = 1;</code>
     * @param array<\Common\Penalty>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPenalties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\Penalty::class);
        $this->penalties = $arr;

        return $this;
    }

}

