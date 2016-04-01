<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->IncludeComponent("artem:news.detal", "",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "N",
        "vse_horosho" => "100%",
        "news_id"=>$ID
    )
);
require($_SERVER["DOCUMENT_ROOT"]. "/bitrix/footer.php");
?>