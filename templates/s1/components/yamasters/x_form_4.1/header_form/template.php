<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if ($_REQUEST["status"] == "sendok"):?>

	<? 
	echo "Сообщение успешно отправлено.";
	?>

<?else:?>



	<FORM class="standart" method="post" action="<?=$_SERVER["SCRIPT_NAME"]."?send=Y"?>">
		<TABLE class="standardForm" cellSpacing=0 cellPadding=0 align=center border=0>
			<TBODY>
				<TR>
					<TH colSpan=2>Обратная связь</TH>
				</TR>
				<?if (in_array("name" , $arParams["SHOW_PROPS"])):?>
				<TR>

					<TD>Kонтактное лицо
						<?if(in_array("name" , $arParams["REQUIRED_PROPS"])):?><SPAN class=red>*</SPAN><?endif?>:
					</TD>
					<TD><INPUT name="<?=$arResult["FORM_NAME"]?>[name]" value="<?=htmlspecialchars($_REQUEST["form_required"]["name"])?>" <?if(in_array("name" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>></TD></TR>
				<TR>
				<?endif;?>
				<?if (in_array("phone" , $arParams["SHOW_PROPS"])):?>
					<TD>Телефон
						<?if(in_array("phone" , $arParams["REQUIRED_PROPS"])):?>
							<SPAN class="red">*</SPAN>
						<?endif;?>
						:
					</TD>
					<TD><INPUT name="<?=$arResult["FORM_NAME"]?>[phone]" value="<?=htmlspecialchars($_REQUEST["form_required"]["phone"])?>" <?if(in_array("phone" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>></TD>
				</TR>
				<?endif;?>
				<?if (in_array("email" , $arParams["SHOW_PROPS"])):?>
				<TR>
					<TD>E-mail:
					<?if(in_array("email" , $arParams["REQUIRED_PROPS"])):?>
						<SPAN class="red">*</SPAN>
					<?endif;?>
					</TD>
					
					<TD><INPUT name="<?=$arResult["FORM_NAME"]?>[email]" value="<?=htmlspecialchars($_REQUEST["form_required"]["email"])?>" <?if(in_array("email" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>></TD>
				</TR>
				<?endif?>
				<?if (in_array("notice" , $arParams["SHOW_PROPS"])):?>
				<TR>
					<TD>Сообщение<SPAN class="red">*</SPAN>:</TD>
					<TD><TEXTAREA name="<?=$arResult["FORM_NAME"]?>[notice]" <?if(in_array("notice" , $arParams["REQUIRED_PROPS"])):?>required<?endif?>><?=htmlspecialchars($_REQUEST["form_required"]["notice"])?></TEXTAREA></TD></TR>
				<TR>
				<?endif;?>
				<?foreach($arParams["USER_INPUT"] as $inputName):?>
					<?if(!empty($inputName)):?>
					<TR>
						<TD><?=$arParams["INPUT_TITLE_".$inputName]?>:
						<?if(in_array($inputName , $arParams["REQUIRED_PROPS"])):?>
							<SPAN class="red">*</SPAN>
						<?endif;?>
						</TD>
						
						<TD><INPUT name="<?=$arResult["FORM_NAME"]?>[<?=$inputName?>]" value="<?=htmlspecialchars($_REQUEST["form_required"][$inputName])?>" <?if(in_array($inputName , $arParams["REQUIRED_PROPS"])):?>required<?endif?>></TD>
					</TR>
					<?endif;?>
				<?endforeach;?>
				<?if($arParams["SHOW_LINK_PAGE"]):?>
					<INPUT type="hidden" name="<?=$arResult["FORM_NAME"]?>[element]" value="<?=$_SERVER["SCRIPT_URI"]?>">
				<?endif;?>
					<TD colSpan=2>
						<DIV style="TEXT-ALIGN: right">
							<INPUT class="button" type="submit" value="Oтправить"></DIV>* помечены обязательные поля 
					</TD>
				</TR>
			</TBODY>
		</TABLE>

		<div style='display:none;'>
			<input type="text" name="<?=$arResult["FORM_NAME"]?>[robot]" value="" />
		</div>
	</FORM>

<?endif;?>