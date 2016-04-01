<?

$APPLICATION->SetTitle("Новая страница");
?><img width="90" src="/examples/download/files/1.png" height="91">Сферический сайт в вакууме<br>
 <br>
 Добавление сферического товара<br>
<br>
<br>
<div>
	<div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_URL" => "result_edit.php",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "result_list.php",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
		"WEB_FORM_ID" => "4"
	)
);?>
	</div>
</div>
<form action="http://172.16.1.245/result-sfery.php">
 <input type="submit" value="показать результаты">
</form>
