<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if ($_REQUEST["status"] == "sendok"):?>

	<? 
	echo "Сообщение успешно отправлено.";
	?>

<?else:?>
	
	<div 
		class="feedback bgcolor-<?=$arParams["BG_COLOR"]?> titlecolor-<?=$arParams["TITLE_COLOR"]?>"
		style='max-width: <?=$arParams["MAX_WIDTH"]?>px; margin: 0px auto;'
	>

		<form method="post" action="<?=$arResult["ACTION_URL"]?>">
			<div class="title">Обратная связь</div>
			<input 
				type="text" 
				name="<?=$arResult["FORM_NAME"]?>[name]" 
				value="<?=htmlspecialchars($_REQUEST[$arResult["FORM_NAME"]]["name"])?>"
				placeholder="Ваше имя (обязательно)" 
				class="inp"
				_required="required"
			>
			<input 
				type="text" 
				name="<?=$arResult["FORM_NAME"]?>[phone]" 
				value="<?=htmlspecialchars($_REQUEST[$arResult["FORM_NAME"]]["phone"])?>" 
				placeholder="Телефон (обязательно)" 
				class="inp"
				_required="required"
			>
			<input 
				type="email" 
				name="<?=$arResult["FORM_NAME"]?>[email]" 
				value="<?=htmlspecialchars($_REQUEST[$arResult["FORM_NAME"]]["email"])?>" 
				placeholder="E-mail" 
				class="inp"
			>
			<textarea 
				name="<?=$arResult["FORM_NAME"]?>[notice]" 
				placeholder="Сообщение" 
				class="text-ar"
			><?=htmlspecialchars($_REQUEST[$arResult["FORM_NAME"]]["notice"])?></textarea>

			<input type="submit" value="Отправить" class="sbm">

			<div style='display:none;'>
				<input type="text" name="<?=$arResult["FORM_NAME"]?>[robot]" value="" />
			</div>
		</form>

	</div>

<?endif;?>