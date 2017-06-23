<?
define("IMG_QUALITY",65);

function dump($array){
    echo "<pre>";
        print_r($array);
    echo "</pre>";
}

/**
 * делает ресайз фото для заданого id фото, заданим разсером, можно задать качество фото
 * 
 * @param type $id id фкартинки
 * @param type $resize массив размеров картинки
 * @param type $quality качество фото от 0 до 100
 * @param type $type тип ресайза
 * @return string путь к фото
 */
function ResizeImg($id,$resize,$quality=IMG_QUALITY,$type=BX_RESIZE_IMAGE_PROPORTIONAL ){
    if(is_array($id) && $id["ID"])
    {  
        $id = $id["ID"];
    
    }
    
    return CFile::ResizeImageGet($id, $resize,$type,false,false,false,$quality)["src"];
}

function getJsonResponse($bx_filter,$fields,$settings){
    if(is_array($bx_filter) && is_array($fields)){
        $filter["filter"] = $bx_filter;
        foreach($fields as $bxKey => $jsonKey){
            $filter['select'][] = $bxKey;
        }
     
        CModule::IncludeModule('iblock');
        $res = Bitrix\Iblock\ElementTable::getList($filter);
     //   $response["request"] = '{"custom": "overwrited value","key1": "value1","key2": "value2"}';
        $i =0;
        while($row = $res->fetch()){
            
            foreach($row as $bx_Key => $bx_value)
            {
                if($bx_Key == "PREVIEW_PICTURE" || $bx_Key == "DETAIL_PICTURE" || $settings[$bx_Key] && $row[$bx_Key])
                {
                    $bres =array("width" => 100, "height" => 100 );
                    if($settings[$bx_Key]['w']){
                        $bres["width"] =  $settings[$bx_Key]['w'];
                    }
                    if($settings[$bx_Key]['h']){
                        $bres["height"] =  $settings[$bx_Key]['h'];
                    }
                
                    $bx_value = ResizeImg($row[$bx_Key], $bres, IMG_QUALITY);
                }
                $tt[$i][$fields[$bx_Key]] = $bx_value;
            }
   
            $i++;
        }
        return $tt;

    }
   
    
}