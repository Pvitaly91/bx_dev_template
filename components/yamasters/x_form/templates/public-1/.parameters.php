<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// examples: http://html.web1.com.ua/html/feedback/

$arBgColors = array(
	"white" => "�����", # 0
	"black" => "������", # 1
	"yellow" => "������",# 2 
	"green" => "�������", # 3 
	"red" => "�������",   # 4  
	"blue" => "�����"   # 5
);
$arTitleColors = array(
	"white" => "�����", # 0
	"black" => "������"  # 1
	);



	$arTemplateParameters["BG_COLOR"] = array(
		"PARENT" => "OVERALL",
		"NAME" => "���� ����",
		"TYPE" => "LIST",
		"DEFAULT" => "green",
		"VALUES" => $arBgColors,
	);

	$arTemplateParameters["TITLE_COLOR"] = array(
		"PARENT" => "OVERALL",
		"NAME" => "���� ���������",
		"TYPE" => "LIST",
		"DEFAULT" => "white",
		"VALUES" => $arTitleColors,
	);

	$arTemplateParameters["MAX_WIDTH"] = array(
		"PARENT" => "OVERALL",
		"NAME" => "������������ ������ (px)",
		"TYPE" => "STRING",
		"DEFAULT" => "300",
	);

?>