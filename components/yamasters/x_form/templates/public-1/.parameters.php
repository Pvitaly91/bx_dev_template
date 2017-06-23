<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// examples: http://html.web1.com.ua/html/feedback/

$arBgColors = array(
	"white" => "Белый", # 0
	"black" => "Черный", # 1
	"yellow" => "Желтый",# 2 
	"green" => "Зеленый", # 3 
	"red" => "Красный",   # 4  
	"blue" => "Синйи"   # 5
);
$arTitleColors = array(
	"white" => "Белый", # 0
	"black" => "Черный"  # 1
	);



	$arTemplateParameters["BG_COLOR"] = array(
		"PARENT" => "OVERALL",
		"NAME" => "Цвет фона",
		"TYPE" => "LIST",
		"DEFAULT" => "green",
		"VALUES" => $arBgColors,
	);

	$arTemplateParameters["TITLE_COLOR"] = array(
		"PARENT" => "OVERALL",
		"NAME" => "Цвет заголовка",
		"TYPE" => "LIST",
		"DEFAULT" => "white",
		"VALUES" => $arTitleColors,
	);

	$arTemplateParameters["MAX_WIDTH"] = array(
		"PARENT" => "OVERALL",
		"NAME" => "Максимальная ширина (px)",
		"TYPE" => "STRING",
		"DEFAULT" => "300",
	);

?>