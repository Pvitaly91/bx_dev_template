<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
 <!DOCTYPE html>
 <? define("FULTT_TPL_PATH",$_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH);?>
 <html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
        <? $APPLICATION->ShowHead() ?>
        <title><? $APPLICATION->ShowTitle() ?></title>
    </head> 
    <body> 
        <? $APPLICATION->ShowPanel(); ?>
        <?// var_dump(FULTT_TPL_PATH);
        
        ?>
