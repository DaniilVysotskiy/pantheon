<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace Common;

use UnexpectedValueException;

/**
 * Protobuf type <code>Common.RoundOutcome</code>
 */
class RoundOutcome
{
    /**
     * Generated from protobuf enum <code>RON = 0;</code>
     */
    const RON = 0;
    /**
     * Generated from protobuf enum <code>TSUMO = 1;</code>
     */
    const TSUMO = 1;
    /**
     * Generated from protobuf enum <code>DRAW = 2;</code>
     */
    const DRAW = 2;
    /**
     * Generated from protobuf enum <code>ABORT = 3;</code>
     */
    const ABORT = 3;
    /**
     * Generated from protobuf enum <code>CHOMBO = 4;</code>
     */
    const CHOMBO = 4;
    /**
     * Generated from protobuf enum <code>NAGASHI = 5;</code>
     */
    const NAGASHI = 5;

    private static $valueToName = [
        self::RON => 'RON',
        self::TSUMO => 'TSUMO',
        self::DRAW => 'DRAW',
        self::ABORT => 'ABORT',
        self::CHOMBO => 'CHOMBO',
        self::NAGASHI => 'NAGASHI',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

