<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mimir.proto

namespace Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Common.Games_AddRound_Response</code>
 */
class Games_AddRound_Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Common.IntermediateResultOfSession scores = 1;</code>
     */
    private $scores;
    /**
     * Generated from protobuf field <code>repeated string extraPenaltyLog = 2;</code>
     */
    private $extraPenaltyLog;
    /**
     * current round number
     *
     * Generated from protobuf field <code>int32 round = 3;</code>
     */
    protected $round = 0;
    /**
     * Generated from protobuf field <code>int32 honba = 4;</code>
     */
    protected $honba = 0;
    /**
     * on the table from previous round
     *
     * Generated from protobuf field <code>int32 riichiBets = 5;</code>
     */
    protected $riichiBets = 0;
    /**
     * if game has been finished prematurely (e.g. by timeout)
     *
     * Generated from protobuf field <code>bool prematurelyFinished = 6;</code>
     */
    protected $prematurelyFinished = false;
    /**
     * True if round has just changed useful to determine if current 4e or 4s is first one, no matter what honba count is. (Possible situation: draw in 3s or 3e, so first 4e or 4s has honba).
     *
     * Generated from protobuf field <code>bool roundJustChanged = 7;</code>
     */
    protected $roundJustChanged = false;
    /**
     * Generated from protobuf field <code>bool isFinished = 8;</code>
     */
    protected $isFinished = false;
    /**
     * True if timer policy refers to "yellow zone" rule AND first game in yellow zone was already recorded. In fact, this is a "red zone" flag, which means that hanchan will be finished when next round is recorded.
     *
     * Generated from protobuf field <code>bool yellowZoneAlreadyPlayed = 9;</code>
     */
    protected $yellowZoneAlreadyPlayed = false;
    /**
     * Outcome of previously recorded round. Useful to determine if certain rules should be applied in current case, e.g., agariyame should not be applied on chombo or abortive draw.
     *
     * Generated from protobuf field <code>optional .Common.RoundOutcome lastOutcome = 10;</code>
     */
    protected $lastOutcome = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Common\IntermediateResultOfSession>|\Google\Protobuf\Internal\RepeatedField $scores
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $extraPenaltyLog
     *     @type int $round
     *           current round number
     *     @type int $honba
     *     @type int $riichiBets
     *           on the table from previous round
     *     @type bool $prematurelyFinished
     *           if game has been finished prematurely (e.g. by timeout)
     *     @type bool $roundJustChanged
     *           True if round has just changed useful to determine if current 4e or 4s is first one, no matter what honba count is. (Possible situation: draw in 3s or 3e, so first 4e or 4s has honba).
     *     @type bool $isFinished
     *     @type bool $yellowZoneAlreadyPlayed
     *           True if timer policy refers to "yellow zone" rule AND first game in yellow zone was already recorded. In fact, this is a "red zone" flag, which means that hanchan will be finished when next round is recorded.
     *     @type int $lastOutcome
     *           Outcome of previously recorded round. Useful to determine if certain rules should be applied in current case, e.g., agariyame should not be applied on chombo or abortive draw.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mimir::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Common.IntermediateResultOfSession scores = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Generated from protobuf field <code>repeated .Common.IntermediateResultOfSession scores = 1;</code>
     * @param array<\Common\IntermediateResultOfSession>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Common\IntermediateResultOfSession::class);
        $this->scores = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string extraPenaltyLog = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtraPenaltyLog()
    {
        return $this->extraPenaltyLog;
    }

    /**
     * Generated from protobuf field <code>repeated string extraPenaltyLog = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtraPenaltyLog($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extraPenaltyLog = $arr;

        return $this;
    }

    /**
     * current round number
     *
     * Generated from protobuf field <code>int32 round = 3;</code>
     * @return int
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * current round number
     *
     * Generated from protobuf field <code>int32 round = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRound($var)
    {
        GPBUtil::checkInt32($var);
        $this->round = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 honba = 4;</code>
     * @return int
     */
    public function getHonba()
    {
        return $this->honba;
    }

    /**
     * Generated from protobuf field <code>int32 honba = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHonba($var)
    {
        GPBUtil::checkInt32($var);
        $this->honba = $var;

        return $this;
    }

    /**
     * on the table from previous round
     *
     * Generated from protobuf field <code>int32 riichiBets = 5;</code>
     * @return int
     */
    public function getRiichiBets()
    {
        return $this->riichiBets;
    }

    /**
     * on the table from previous round
     *
     * Generated from protobuf field <code>int32 riichiBets = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRiichiBets($var)
    {
        GPBUtil::checkInt32($var);
        $this->riichiBets = $var;

        return $this;
    }

    /**
     * if game has been finished prematurely (e.g. by timeout)
     *
     * Generated from protobuf field <code>bool prematurelyFinished = 6;</code>
     * @return bool
     */
    public function getPrematurelyFinished()
    {
        return $this->prematurelyFinished;
    }

    /**
     * if game has been finished prematurely (e.g. by timeout)
     *
     * Generated from protobuf field <code>bool prematurelyFinished = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrematurelyFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->prematurelyFinished = $var;

        return $this;
    }

    /**
     * True if round has just changed useful to determine if current 4e or 4s is first one, no matter what honba count is. (Possible situation: draw in 3s or 3e, so first 4e or 4s has honba).
     *
     * Generated from protobuf field <code>bool roundJustChanged = 7;</code>
     * @return bool
     */
    public function getRoundJustChanged()
    {
        return $this->roundJustChanged;
    }

    /**
     * True if round has just changed useful to determine if current 4e or 4s is first one, no matter what honba count is. (Possible situation: draw in 3s or 3e, so first 4e or 4s has honba).
     *
     * Generated from protobuf field <code>bool roundJustChanged = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setRoundJustChanged($var)
    {
        GPBUtil::checkBool($var);
        $this->roundJustChanged = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isFinished = 8;</code>
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->isFinished;
    }

    /**
     * Generated from protobuf field <code>bool isFinished = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->isFinished = $var;

        return $this;
    }

    /**
     * True if timer policy refers to "yellow zone" rule AND first game in yellow zone was already recorded. In fact, this is a "red zone" flag, which means that hanchan will be finished when next round is recorded.
     *
     * Generated from protobuf field <code>bool yellowZoneAlreadyPlayed = 9;</code>
     * @return bool
     */
    public function getYellowZoneAlreadyPlayed()
    {
        return $this->yellowZoneAlreadyPlayed;
    }

    /**
     * True if timer policy refers to "yellow zone" rule AND first game in yellow zone was already recorded. In fact, this is a "red zone" flag, which means that hanchan will be finished when next round is recorded.
     *
     * Generated from protobuf field <code>bool yellowZoneAlreadyPlayed = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setYellowZoneAlreadyPlayed($var)
    {
        GPBUtil::checkBool($var);
        $this->yellowZoneAlreadyPlayed = $var;

        return $this;
    }

    /**
     * Outcome of previously recorded round. Useful to determine if certain rules should be applied in current case, e.g., agariyame should not be applied on chombo or abortive draw.
     *
     * Generated from protobuf field <code>optional .Common.RoundOutcome lastOutcome = 10;</code>
     * @return int
     */
    public function getLastOutcome()
    {
        return isset($this->lastOutcome) ? $this->lastOutcome : 0;
    }

    public function hasLastOutcome()
    {
        return isset($this->lastOutcome);
    }

    public function clearLastOutcome()
    {
        unset($this->lastOutcome);
    }

    /**
     * Outcome of previously recorded round. Useful to determine if certain rules should be applied in current case, e.g., agariyame should not be applied on chombo or abortive draw.
     *
     * Generated from protobuf field <code>optional .Common.RoundOutcome lastOutcome = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setLastOutcome($var)
    {
        GPBUtil::checkEnum($var, \Common\RoundOutcome::class);
        $this->lastOutcome = $var;

        return $this;
    }

}

