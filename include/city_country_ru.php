<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h3>Страна</h3>
<div class="niceselect_wrap">
	<select name="countrySelect" class="niceselect countrySelect">
		<option value="">Выберите страну</option>
		<?if(CModule::IncludeModule("iblock")):
			// выборка только активных разделов из инфоблока $IBLOCK_ID, $ID - раздел-родителя
			$ufName = Array("UF_RU_NAME");
			$arFilter = Array('IBLOCK_ID'=>9, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$ID);
			$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true,$ufName );
			while($ar_result = $db_list->GetNext()):?>
				<option value="<?=$ar_result['CODE']?>"><?echo($ar_result["UF_RU_NAME"]);?></option>
			<?endwhile;?>
		<?endif;?>
	</select>
</div>

<h3>Город</h3>
<div class="niceselect_wrap citySelectWrap" >
	<select name="choseCitySelect" class="niceselect active" disabled>
		<option value="">Выберите город</option>
	</select>
	<select name="choseCityLithuania" class="niceselect citySelect">
		<option value="">Выберите город</option>
		<?
		CModule::IncludeModule("iblock");
		$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID", "CODE","PROPERTY_name_ru");
		$arFilter = Array("IBLOCK_ID"=>9,"SECTION_ID"=>32, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
		$res = CIBlockElement::GetList(Array("SORT"=>"ASC"),

			$arFilter, false, false, $arSelect); // Lt
		while($ob = $res->GetNextElement()):?>
			<?$arFields = $ob->GetFields();?>
			<option value="<?echo($arFields['CODE']);?>"><?echo($arFields['PROPERTY_NAME_RU_VALUE']);?></option>
		<?endwhile;?>
	</select>
	<select name="choseCityPoland" class="niceselect citySelect">
		<option value="">Выберите город</option>
		<?
		CModule::IncludeModule("iblock");
		$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID", "CODE","PROPERTY_name_ru");
		$arFilter = Array("IBLOCK_ID"=>9,"SECTION_ID"=>33, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
		$res = CIBlockElement::GetList(Array("SORT"=>"ASC"),

			$arFilter, false, false, $arSelect); // Pl
		while($ob = $res->GetNextElement()):?>
			<?$arFields = $ob->GetFields();?>
			<option value="<?echo($arFields['CODE']);?>"><?echo($arFields['PROPERTY_NAME_RU_VALUE']);?></option>
		<?endwhile;?>
	</select>
	<select name="choseCityRussia" class="niceselect citySelect">
		<option value="">Выберите город</option>
		<?
		CModule::IncludeModule("iblock");
		$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID", "CODE","PROPERTY_name_ru");
		$arFilter = Array("IBLOCK_ID"=>9,"SECTION_ID"=>34, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
		$res = CIBlockElement::GetList(Array("SORT"=>"ASC"),

			$arFilter, false, false, $arSelect); // Ru
		while($ob = $res->GetNextElement()):?>
			<?$arFields = $ob->GetFields();?>
			<option value="<?echo($arFields['CODE']);?>"><?echo($arFields['PROPERTY_NAME_RU_VALUE']);?></option>
		<?endwhile;?>
	</select>
</div>