<?header("Content-type:application/json");
require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");

$response["api_response"]["items"] = getJsonResponse(["IBLOCK_ID" => 3,"ACTIVE" => "Y"], ["PREVIEW_PICTURE" => "img","ID" => "id","PREVIEW_TEXT" => "text"],["PREVIEW_PICTURE" => ["w" => 100, "h" => 100]]);
echo json_encode($response);


