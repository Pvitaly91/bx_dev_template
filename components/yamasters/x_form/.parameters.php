<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();



$arComponentParameters = array(
	"GROUPS" => array(
		"OVERALL" => array(
			"NAME" => "Общие настройки",
			"SORT" => 10,
		),
		"DATA_SOURSE" => array(
			"NAME" => "Источник данных",
			"SORT" => 20,
		),
	),
	"PARAMETERS" => array(
		"CACHE_TIME"  =>  Array("DEFAULT"=>3600),
		"DESTINATION_EMAIL" => array(
			"PARENT" => "DATA_SOURSE",
			"NAME" => "Е-меил получателя",
			"TYPE" => "STRING",
		),
		"RANDOM_FORM_NAME" => array(
			"PARENT" => "DATA_SOURSE",
			"NAME" => "Случайное название формы",
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
		"FORM_NAME" => array(
			"PARENT" => "DATA_SOURSE",
			"NAME" => "Название веб-формы",
			"TYPE" => "STRING",
		),
	),
);
?>