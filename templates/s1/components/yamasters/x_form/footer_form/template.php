<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if ($_REQUEST["status"] == "sendok"):?>

    <p style="color:green; text-align:center">Сообщение успешно отправлено.</p>
<?else:?>
		
    <FORM class="standart" method="post" action="<?="/?send=Y"?>">
        <div class="row center-h">
            <div class="cols s_24 m_22 l_16">
                <div class="row">
                    <?if (in_array("name" , $arParams["SHOW_PROPS"])):?>
                    <div class="cols s_24 m_8">
                        <label>
                         <INPUT type="text" name="<?=$arResult["FORM_NAME"]?>[name]" placeholder="Имя"
                           value="<?=htmlspecialchars($_REQUEST["form_required"]["name"])?>"
                        <?if(in_array("name" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>>
                        </label>
                    </div>
                    <?endif;?>
                    <?if (in_array("phone" , $arParams["SHOW_PROPS"])):?>
                    <div class="cols s_24 m_8">
                        <label>
                        <INPUT   type="tel" name="<?=$arResult["FORM_NAME"]?>[phone]" placeholder="Телефон" 
                                value="<?=htmlspecialchars($_REQUEST["form_required"]["phone"])?>"
                         <?if(in_array("phone" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>>
                        </label>
                    </div>    
                    <?endif;?>
                    <div class="cols s_24 m_8">
                        <INPUT class="button" type="submit" value="Перезвонить">
                    </div>    
                    <div style='display:none;'>
                        <input type="text" name="<?=$arResult["FORM_NAME"]?>[robot]" value="" />
                    </div>
                </div>
            </div>
        </div>
	</FORM>
              
<?endif;?>
				

						
			