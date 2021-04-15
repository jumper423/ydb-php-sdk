<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.KeyRange</code>
 */
class KeyRange extends \Google\Protobuf\Internal\Message
{
    protected $from_bound;
    protected $to_bound;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\TypedValue $greater
     *           Specify if we don't want to include given key
     *     @type \Ydb\TypedValue $greater_or_equal
     *           Specify if we want to include given key
     *     @type \Ydb\TypedValue $less
     *           Specify if we don't want to include given key
     *     @type \Ydb\TypedValue $less_or_equal
     *           Specify if we want to include given key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Specify if we don't want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue greater = 1;</code>
     * @return \Ydb\TypedValue
     */
    public function getGreater()
    {
        return $this->readOneof(1);
    }

    public function hasGreater()
    {
        return $this->hasOneof(1);
    }

    /**
     * Specify if we don't want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue greater = 1;</code>
     * @param \Ydb\TypedValue $var
     * @return $this
     */
    public function setGreater($var)
    {
        GPBUtil::checkMessage($var, \Ydb\TypedValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Specify if we want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue greater_or_equal = 2;</code>
     * @return \Ydb\TypedValue
     */
    public function getGreaterOrEqual()
    {
        return $this->readOneof(2);
    }

    public function hasGreaterOrEqual()
    {
        return $this->hasOneof(2);
    }

    /**
     * Specify if we want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue greater_or_equal = 2;</code>
     * @param \Ydb\TypedValue $var
     * @return $this
     */
    public function setGreaterOrEqual($var)
    {
        GPBUtil::checkMessage($var, \Ydb\TypedValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Specify if we don't want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue less = 3;</code>
     * @return \Ydb\TypedValue
     */
    public function getLess()
    {
        return $this->readOneof(3);
    }

    public function hasLess()
    {
        return $this->hasOneof(3);
    }

    /**
     * Specify if we don't want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue less = 3;</code>
     * @param \Ydb\TypedValue $var
     * @return $this
     */
    public function setLess($var)
    {
        GPBUtil::checkMessage($var, \Ydb\TypedValue::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Specify if we want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue less_or_equal = 4;</code>
     * @return \Ydb\TypedValue
     */
    public function getLessOrEqual()
    {
        return $this->readOneof(4);
    }

    public function hasLessOrEqual()
    {
        return $this->hasOneof(4);
    }

    /**
     * Specify if we want to include given key
     *
     * Generated from protobuf field <code>.Ydb.TypedValue less_or_equal = 4;</code>
     * @param \Ydb\TypedValue $var
     * @return $this
     */
    public function setLessOrEqual($var)
    {
        GPBUtil::checkMessage($var, \Ydb\TypedValue::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFromBound()
    {
        return $this->whichOneof("from_bound");
    }

    /**
     * @return string
     */
    public function getToBound()
    {
        return $this->whichOneof("to_bound");
    }

}
