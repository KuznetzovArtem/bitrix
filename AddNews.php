<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

<?php $APPLICATION->IncludeComponent(
    "artem:news.add",
    "",
    Array(
        "IBLOCK_ID"=>22
    )
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>

