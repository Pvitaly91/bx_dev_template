<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (isset($arParams["COMPONENT_ENABLE"]) && $arParams["COMPONENT_ENABLE"] === false)
	return;

if (!empty($arParams["FORM_NAME"]))
	$arResult["FORM_NAME"] = $arParams["FORM_NAME"];
elseif ($arParams["RANDOM_FORM_NAME"] == "Y")
	$arResult["FORM_NAME"] = md5(date("d.m.Y H"));
else
	$arResult["FORM_NAME"] = "form_required";

$arResult["ACTION_URL"] = $APPLICATION->GetCurPage(false)."?send=Y";

// Отправляем письмо

if(!empty($_POST[$arResult["FORM_NAME"]])) 
{	
	$arFields = $_POST[$arResult["FORM_NAME"]]; 

	if (empty($arFields['robot']))
	{
        $name = htmlspecialchars($arFields["name"]); 
        $email =  htmlspecialchars($arFields["email"]);
        $phone =  htmlspecialchars($arFields["phone"]);
        $notice =  htmlspecialchars($arFields["notice"]); 

		$strError = "";

		if (strlen($arParams["DESTINATION_EMAIL"]) <= 0)
			$arParams["DESTINATION_EMAIL"] = DETAULT_EMAIL_FROM; 

		if (strlen($name) <= 0)
			$strError .= "- Вы не указали своё имя<br />";

		if (strlen($phone) <= 0)
			$strError .= "- Вы не указали свой телефон<br />";

#		if (strlen($notice) <= 0)
#			$strError .= "- Вы не указали текст сообщения<br />";
		
		if (strlen($email) > 0 && !filter_var($email, FILTER_VALIDATE_EMAIL))
			$strError .= "- Вы указали несуществующий email-адрес<br />";

		if (strlen($strError) <= 0)
		{
			$to = $arParams["DESTINATION_EMAIL"]; 
			if($email)
                $message .= " \n E-mail: ".$email;
            
            if($name)
                $message .= " Kонтактное лицо: ". $name;
            
            if($phone)
                $message .=" \n телефон: ".$phone;
            
            if($notice)
                $message .= " \n Cообщение:".$notice;
            
			//$message = $name."\n E-mail: ".$email."\n телефон: ".$phone." \n Cообщение:".$notice;

			$subject = "Сообщене с сайта ".$_SERVER['HTTP_HOST'];

			// текущий сайт
			$rsSites = CSite::GetByID(SITE_ID);
			$arCurrentSite = $rsSites->Fetch();

			$headers  = 'MIME-Version: 1.0' . PHP_EOL;
			$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
			$headers .= 'From: '.$email.'' . PHP_EOL;

			if ( mail($to, $subject, $message, $headers)  )
			{
				LocalRedirect($APPLICATION->GetCurPageParam("status=sendok", array("status")));
			}
			else
				ShowError("Неизвестная ошибка отправки почтового сообщения.");
		}
		else
			ShowError("Ошибка отправки:<br />".$strError);
	}
	else
		ShowError("Ошибка защиты (заполнение роботом):<br />".$strError);
} 

// Выводим шаблон на экран
$this->IncludeComponentTemplate();
?>