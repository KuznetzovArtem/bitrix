<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><?$APPLICATION->IncludeComponent(
	"bitrix:form.result.list", 
	"my", 
	array(
		"RESULT_ID" => "RESULT_ID",
		"WEB_FORM_ID" => "4",
		"COMPONENT_TEMPLATE" => "my",
		"SEF_MODE" => "N",
		"VIEW_URL" => "result_view.php",
		"EDIT_URL" => "result_edit.php",
		"NEW_URL" => "result_new.php",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_STATUS" => "Y",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>