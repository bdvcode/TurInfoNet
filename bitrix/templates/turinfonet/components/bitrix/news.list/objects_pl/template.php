<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
{
<?
$arr = array();
foreach($arResult["ITEMS"] as $arItem):?>

	"id<?echo ($arItem["ID"]);?>": {
	"name": <?echo json_encode($arItem["NAME"]);?>,
	"LatLng": [<?echo ($arItem["PROPERTIES"]["cord"]["VALUE"]);?>],
	"contacts": "<b>Contacts:</b> <?echo ($arItem["PROPERTIES"]["contacts_pl"]["VALUE"]);?>,<br/>",
	"text": "<?echo ($arItem["PROPERTIES"]["detail_text_en"]["~VALUE"]["TEXT"]);?>"
	}
	<?if($arItem === end($arResult["ITEMS"])):?>
		<?else:?>
		,
	<?endif;?>
<?endforeach;?>
}
