<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if ($_REQUEST["status"] == "sendok"):?>

    <p style="color:green; text-align:center">Сообщение успешно отправлено.</p>
<?else:?>
  <div class="close"></div>
  <FORM class="standart" method="post" action="<?="/?send=Y"?>">
        <p><?=$arParams["FORM_TITLE"]?></p>

        <?if (in_array("name" , $arParams["SHOW_PROPS"])):?>
            <INPUT type="text" name="<?=$arResult["FORM_NAME"]?>[name]" 
                   placeholder="Имя"
               value="<?=htmlspecialchars($_REQUEST["form_required"]["name"])?>"
            <?if(in_array("name" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>>
        <?endif;?>
        <?if (in_array("phone" , $arParams["SHOW_PROPS"])):?>
            <INPUT  type="tel" name="<?=$arResult["FORM_NAME"]?>[phone]" placeholder="Телефон"
                    value="<?=htmlspecialchars($_REQUEST["form_required"]["phone"])?>"
             <?if(in_array("phone" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>>
        <?endif;?>
        <INPUT class="button" type="submit" value="Oтправить">
        <div style='display:none;'>
            <input type="text" name="<?=$arResult["FORM_NAME"]?>[robot]" value="" />
        </div>
	</FORM>
<?endif;?>