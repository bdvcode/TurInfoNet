<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
{
<?
$arr = array();
foreach($arResult["ITEMS"] as $arItem):?>

	"id<?echo ($arItem["ID"]);?>": {
	"name": <?echo json_encode($arItem["PROPERTIES"]["name_ru"]["VALUE"]);?>,
	"LatLng": [<?echo ($arItem["PROPERTIES"]["cord"]["VALUE"]);?>],
	"contacts": "<?if($arItem["PROPERTIES"]["contacts"]["VALUE"]):?><b>Контакты:</b> <?echo ($arItem["PROPERTIES"]["contacts"]["VALUE"]);?><br/><?endif;?><?if($arItem["PROPERTIES"]["adrr"]["VALUE"]):?><b>Адрес:</b> <?echo ($arItem["PROPERTIES"]["adrr"]["VALUE"]);?><br/><?endif;?><?if($arItem["PROPERTIES"]["tel"]["VALUE"]):?><b>Телефон</b>:</b> <?echo ($arItem["PROPERTIES"]["tel"]["VALUE"]);?><br/><?endif;?> <?if($arItem["PROPERTIES"]["email"]["VALUE"]):?><b>E-mail:</b> <a rel='nofollow' href='mailto:<?echo($arItem["PROPERTIES"]["email"]["VALUE"]);?>'><?echo ($arItem["PROPERTIES"]["email"]["VALUE"]);?></a><br/><?endif;?> <?if($arItem["PROPERTIES"]["Web"]["VALUE"]):?><b>Web:</b> <a target='_blank' rel='nofollow' href='http://<?echo ($arItem["PROPERTIES"]["Web"]["VALUE"]);?>'><?echo ($arItem["PROPERTIES"]["Web"]["VALUE"]);?></a><?endif;?>",
	"text": <?echo json_encode($arItem["DETAIL_TEXT"]);?>,
	"img": "<?echo $arItem["DETAIL_PICTURE"]["SRC"]?>"
	}
	<?if($arItem === end($arResult["ITEMS"])):?>
		<?else:?>
		,
	<?endif;?>
<?endforeach;?>
}

