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
				<TR>
					<TD>Kонтактное лицо<SPAN class=red>*</SPAN>:</TD>
					<TD><INPUT name="form_required[name]" value="<?=htmlspecialchars($_REQUEST["form_required"]["name"])?>"></TD></TR>
				<TR>
					<TD>Телефон<SPAN class=red>*</SPAN>:</TD>
					<TD><INPUT name="form_required[phone]" value="<?=htmlspecialchars($_REQUEST["form_required"]["phone"])?>"></TD></TR>
				<TR>
					<TD>E-mail:</TD>
					<TD><INPUT name="form_required[email]" value="<?=htmlspecialchars($_REQUEST["form_required"]["email"])?>"></TD></TR>
				<TR>
					<TD>Сообщение<SPAN class=red>*</SPAN>:</TD>
					<TD><TEXTAREA name="form_required[notice]" ><?=htmlspecialchars($_REQUEST["form_required"]["notice"])?></TEXTAREA></TD></TR>
				<TR>
					<TD colSpan=2>
						<DIV style="TEXT-ALIGN: right">
							<INPUT class=button type=submit value=Oтправить></DIV>* помечены обязательные поля 
					</TD>
				</TR>
			</TBODY>
		</TABLE>

		<div style='display:none;'>
			<input type="text" name="form_required[robot]" value="" />
		</div>
	</FORM>

<?endif;?>