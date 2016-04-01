<?php

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!\Bitrix\Main\Loader::includeModule('iblock'))
    return;

Loc::loadMessages(__FILE__);

class NewsAddComponent extends \CBitrixComponent
{

    public function onPrepareComponentParams($params)
    {

        return $params;
    }

    public function executeComponent()
    {

        if ($_POST["sub"]) {

            $this->arResult["form_error"] = $this->addNews();
            unset($_POST["sub"]);
        }
        $this->includeComponentTemplate();
    }

    private function generatePost()
    {
        $arNewsData["nameNews"] = $_POST["nameNews"];

        $arNewsData["headerNews"] = $_POST["headerNews"];

        $arNewsData["TextNews"] = $_POST["TextNews"];

        $arNewsData[DESCRIPTION_ABOUT_ME] = $_POST["descriptionNews"];

        return $arNewsData;
    }

    private function addNews()
    {
        $arNewsData = $this->generatePost();

        $error = $this->validation($arNewsData);
        if ($error !=null)
            return $error;


        $PROP = array();




        $arLoadProductArray = Array(
            "IBLOCK_SECTION_ID" => ABOUT_ME,          // элемент лежит в корне раздела
            "IBLOCK_ID" => $this->arParams["IBLOCK_ID"],
            "PROPERTY_VALUES" => $arNewsData[DESCRIPTION_ABOUT_ME],
            "NAME" => $arNewsData["nameNews"],
            "ACTIVE" => "Y",            // активен
            "PREVIEW_TEXT" => $arNewsData["headerNews"],
            "DETAIL_TEXT" => $arNewsData["TextNews"]
        );

        $newsList = new CIBlockElement();

        $newsList->Add($arLoadProductArray);

        return false;
    }

    private function validation($arNewsData)
    {
        $errors = array();
        if ($arNewsData["nameNews"] == null)
            $errors["nameNews"] = true;
        if ($arNewsData["headerNews"] == null)
            $errors["headerNews"] = true;
        if ($arNewsData["TextNews"] == null)
            $errors["TextNews"] = true;
        if ($arNewsData[DESCRIPTION_ABOUT_ME] == null)
            $errors[DESCRIPTION_ABOUT_ME] = true;
        return $errors;
    }

}
