<?
header("Content-type:application/json");
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');

$response["request"] = '{"custom": "overwrited value","key1": "value1","key2": "value2"}';

$response["api_response"]["items"] = getJsonResponse(["IBLOCK_ID" => 1,"ACTIVE" => "Y"], ["PREVIEW_PICTURE" => "img"],["PREVIEW_PICTURE" => ["w" => 1366, "h" => 650]]);
echo json_encode($response);