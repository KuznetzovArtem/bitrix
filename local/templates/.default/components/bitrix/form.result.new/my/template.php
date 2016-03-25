<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?><div class="form">
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

	<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
	<?=$arResult["FORM_HEADER"]?>

<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>








	<?   
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
		{
			echo $arQuestion["HTML_CODE"];

		}
		else
		{
	?>
		<div class="stringWebForm">


				<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
				<span class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></span>
				<?endif;?>
				<div class="name" id="name<?= $arQuestion["STRUCTURE"][0]["FIELD_ID"]?>"><?if ($arQuestion["REQUIRED"] == "Y"):?><div class="redstar">*</div><?endif;?><?=$arQuestion["CAPTION"]?></div><div class="input" id="input<?= $arQuestion["STRUCTURE"][0]["FIELD_ID"]?>"><?=$arQuestion["HTML_CODE"]?></div>

				<?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>


	</div>


	<?
		}
	} //endwhile
		?>


<?
if($arResult["isUseCaptcha"] == "Y")
{
?>

	<th colspan="2"><?//=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?>


		<input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
		





		<div class="name" width="160"> &#160;  </div><div class="input"><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="130" height="40" /></div>
		<div class="name"><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></div><div class="input"></div><div class="input"><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></div>
		<div class="name">  &#160; </div><div class="input" ><?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?></div>
<?
} // isUseCaptcha
?>
<div class="name">  &#160; </div>
<div class= "input">
		<input class="buttons" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
				<?if ($arResult["F_RIGHT"] >= 15):?>
		<input class="buttons" type="hidden" name="web_form_apply" value="Y" /><input class="buttons" type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
				<?endif;?>
	<input class="buttons" type="reset" value="<?=GetMessage("FORM_RESET");?>" /></div>

<p>

</p>
<?=$arResult["FORM_FOOTER"]?>

</div>
<?
} //endif (isFormNote)
?>