<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>bool finished = 4;</code>
     */
    protected $finished = false;
    /**
     * Generated from protobuf field <code>bool isListed = 5;</code>
     */
    protected $isListed = false;
    /**
     * Generated from protobuf field <code>bool isRatingShown = 6;</code>
     */
    protected $isRatingShown = false;
    /**
     * Generated from protobuf field <code>bool tournamentStarted = 7;</code>
     */
    protected $tournamentStarted = false;
    /**
     * Generated from protobuf field <code>.Common.EventType type = 8;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>bool isPrescripted = 9;</code>
     */
    protected $isPrescripted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $title
     *     @type string $description
     *     @type bool $finished
     *     @type bool $isListed
     *     @type bool $isRatingShown
     *     @type bool $tournamentStarted
     *     @type int $type
     *     @type bool $isPrescripted
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Atoms::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool finished = 4;</code>
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Generated from protobuf field <code>bool finished = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->finished = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isListed = 5;</code>
     * @return bool
     */
    public function getIsListed()
    {
        return $this->isListed;
    }

    /**
     * Generated from protobuf field <code>bool isListed = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsListed($var)
    {
        GPBUtil::checkBool($var);
        $this->isListed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isRatingShown = 6;</code>
     * @return bool
     */
    public function getIsRatingShown()
    {
        return $this->isRatingShown;
    }

    /**
     * Generated from protobuf field <code>bool isRatingShown = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRatingShown($var)
    {
        GPBUtil::checkBool($var);
        $this->isRatingShown = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool tournamentStarted = 7;</code>
     * @return bool
     */
    public function getTournamentStarted()
    {
        return $this->tournamentStarted;
    }

    /**
     * Generated from protobuf field <code>bool tournamentStarted = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setTournamentStarted($var)
    {
        GPBUtil::checkBool($var);
        $this->tournamentStarted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Common.EventType type = 8;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.Common.EventType type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Common\EventType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isPrescripted = 9;</code>
     * @return bool
     */
    public function getIsPrescripted()
    {
        return $this->isPrescripted;
    }

    /**
     * Generated from protobuf field <code>bool isPrescripted = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPrescripted($var)
    {
        GPBUtil::checkBool($var);
        $this->isPrescripted = $var;

        return $this;
    }

}

