<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<?
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/js/jquery-ui-1.12.1.custom/jquery-ui.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-ui-1.12.1.custom/external/jquery/jquery.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-ui-1.12.1.custom/jquery-ui.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/js.js');
	Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge" />');
	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
	?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead();?>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="box">
		<div id="header">
			<table id="top_menu">
				<tr>
					<td id="leftbuff"></td>
					<td class="menu_item"><a href="#">Solutions</a></td>
					<td class="menu_item"><a href="#">Products</a></td>
					<td class="menu_item"><a href="#">Portfolio</a></td>
					<td class="menu_item"><a href="#">Contact</a></td>
				</tr>
			</table>
		</div>
   <div id="content">
