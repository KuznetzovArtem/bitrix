<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная Страница Сферические Товары");
?>
    <div class="mainLogo">
        <img src="/examples/download/files/1.png">
        <div class="mainLogoText ">СФЕРИЧЕСКИЙ <br>САЙТ</div>
        <div class="vakume"> в вакууме</div>
    </div>

    <br>

    <div class="route">
        <a href="#">Главная </a> →
        <a href="#">Сферические товары</a>
        <div class="routeUnder">добавление сферического товара</div>
    </div>

    <br>
    <br>
    <?php $APPLICATION->IncludeComponent(
        "bitrix:form.result.new",
        "my",
        Array(
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "CHAIN_ITEM_LINK" => "",
            "CHAIN_ITEM_TEXT" => "",
            "COMPONENT_TEMPLATE" => "my",
            "EDIT_URL" => "result_edit.php",
            "IGNORE_CUSTOM_TEMPLATE" => "N",
            "LIST_URL" => "result_list.php",
            "SEF_MODE" => "N",
            "SUCCESS_URL" => "",
            "USE_EXTENDED_ERRORS" => "N",
            "VARIABLE_ALIASES" => Array("RESULT_ID" => "RESULT_ID", "WEB_FORM_ID" => "WEB_FORM_ID"),
            "WEB_FORM_ID" => "4"
        )
    ); ?>
    <br>
    <br>
    <h2></h2><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>