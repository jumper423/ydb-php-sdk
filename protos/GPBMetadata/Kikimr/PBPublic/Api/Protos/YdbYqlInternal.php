<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_yql_internal.proto

namespace GPBMetadata\Kikimr\PBPublic\Api\Protos;

class YdbYqlInternal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbCommon::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbOperation::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbTable::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbValue::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
/kikimr/public/api/protos/ydb_yql_internal.protoYdb.YqlInternal,kikimr/public/api/protos/ydb_operation.proto(kikimr/public/api/protos/ydb_table.proto(kikimr/public/api/protos/ydb_value.proto"w
ExecQuerySettings+

strict_dml (2.Ydb.FeatureFlag.Status/
use_new_engine (2.Ydb.FeatureFlag.StatusJ"�
ExecDataQueryAstRequest9
operation_params (2.Ydb.Operations.OperationParams
cluster_name (	
	query_ast (	L

parameters (28.Ydb.YqlInternal.ExecDataQueryAstRequest.ParametersEntry3
tx_settings (2.Ydb.Table.TransactionSettings4
settings (2".Ydb.YqlInternal.ExecQuerySettingsB
ParametersEntry
key (	
value (2.Ydb.TypedValue:8"H
ExecDataQueryAstResponse,
	operation (2.Ydb.Operations.Operation"d
ExecDataQueryAstResult#
result_sets (2.Ydb.ResultSet
	query_ast (	

query_plan (	"�
ExplainDataQueryAstRequest9
operation_params (2.Ydb.Operations.OperationParams
cluster_name (	
	query_ast (	"K
ExplainDataQueryAstResponse,
	operation (2.Ydb.Operations.Operation"B
ExplainDataQueryAstResult
	query_ast (	

query_plan (	B3
com.yandex.ydb.yql_internalBYqlInternalProtos�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

