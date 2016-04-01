<?php
use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!\Bitrix\Main\Loader::includeModule('advertising'))
    return;

Loc::loadMessages(__FILE__);

class AdvertisingBanner extends \CBitrixComponent
{
    private $ID =  null;
    public function onPrepareComponentParams($params)
    {
      $this->ID = $params["news_id"];

        unset($params);

        $params["news_text"] = $this->takeResult();

        return $params;
    }

    private function takeResult()
    {

        CModule::IncludeModule("iblock");

        $news = GetIBlockElement($this->ID);

        return $news["DETAIL_TEXT"];
    }

    public function executeComponent()
    {
        if ($this->startResultCache()) {



            $this->includeComponentTemplate();
        }
    }
}