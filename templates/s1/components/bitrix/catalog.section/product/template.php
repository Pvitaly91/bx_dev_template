<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($arResult["ITEMS"]): ?>
    <div class="Buy" id="buy">
        <div class="row">
            <div class="cols s_24">
                <p class="h1"><?
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include", "", Array(
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "buy-block-title",
                        "AREA_FILE_RECURSIVE" => "Y",
                            ), false
                    );
                    ?>
                </p>
                <ul class="grid s_1 m_2 m__3 l_4">
                    <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <li>
                            <div class="itm" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                                <div class="owl-carousel owl-theme">
                                    <? if ($arItem["PROPERTIES"]["MORE_PHOTO"]): ?>
                                        <? foreach ($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $photo_id): ?>
                                            <div class="item" style="background-image: url('<?= ResizeImg($photo_id, array("width" => 270, "height" => 270), IMG_QUALITY) ?>')"></div>
                                        <? endforeach; ?>    
                                    <? endif; ?>    
                                </div>
                                <div class="bottomInfo">
                                    <p class="ttl"><?= $arItem["NAME"] ?></p>
                                    <a href="#sendMessage" class="sell js-click">Продать дорого</a>
                                </div>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
        </div>
    </div>
<? endif; ?>