<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if ($_REQUEST["status"] == "sendok"):?>
	<? 
	echo "<p style='color:green;'>Сообщение успешно отправлено.</p>";
	?>
<?else:?>
	<div class="feedback_form">
		<h3>Обратная связь</h3>
		<form class="standart" method="post" action="<?=$_SERVER["SCRIPT_NAME"]."?send=Y"?>">
			<input required="required" type="text" class="field" name="form_required[name]" value="<?=htmlspecialchars($_REQUEST["form_required"]["name"])?>" placeholder="Ваше имя">
			<input required="required" type="text" class="field" name="form_required[phone]" value="<?=htmlspecialchars($_REQUEST["form_required"]["phone"])?>" placeholder="Телефон">
			<input required="required" type="email" class="field" name="form_required[email]" value="<?=htmlspecialchars($_REQUEST["form_required"]["email"])?>" placeholder="E-mail">
			<textarea name="form_required[notice]" placeholder="Сообщение" ><?=htmlspecialchars($_REQUEST["form_required"]["notice"])?></textarea>
			<div class="fbd">
				<input type="submit" class="fb_submit" value="Отправить">
			</div>

			<div style='display:none;'>
				<input type="text" name="form_required[robot]" value="" />
			</div>
		</form>
	</div>
<?endif;?>