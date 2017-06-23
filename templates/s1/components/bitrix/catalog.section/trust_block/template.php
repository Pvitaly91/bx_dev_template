<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if ($arResult["ITEMS"]): ?>
<div class="Trust">
	<div class="row">
		<div class="cols s_24">
			<p class="h1"><?
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include", "", Array(
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "trust-block-title",
                        "AREA_FILE_RECURSIVE" => "Y",
                            ), false
                    );
                    ?></p>

                    <ul class="grid s_1 m_2 l_4">

                    <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?><li>
                            <div class="container" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                <p><?=$arItem["NAME"]?></p>
                                <?if($arItem["PREVIEW_PICTURE"]):?>
                                <div class="iconBlock" style="background-image: url('<?= ResizeImg($arItem["PREVIEW_PICTURE"], array("width" => 114, "height" => 114 ),IMG_QUALITY)?>')"></div>
                                <? endif;?>    
                            </div>
                        </li>
                    <? endforeach ?>
                    </ul>
	
		</div>
	</div>
</div>
 
<? endif; ?>
