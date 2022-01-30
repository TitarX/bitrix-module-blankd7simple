<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Application;
use Bitrix\Main\IO\File;
use Perfcode\Blankd7simple\Helpers\MiscHelper;
use Perfcode\Blankd7simple\Entities\ParamsTable;

Loc::loadMessages(__FILE__);
Loader::includeModule('perfcode.blankd7simple');

@set_time_limit(360);

global $APPLICATION;
$APPLICATION->SetTitle(Loc::getMessage('PERFCODE_BLANKD7SIMPLE_PAGE_TITLE'));

//Asset::getInstance()->addJs(MiscHelper::getAssetsPath('js') . '/perfcode_blankd7simple-main.js');

$request = Application::getInstance()->getContext()->getRequest();

$rsParamsCount = ParamsTable::getCount();
if (empty($rsParamsCount) || !is_int($rsParamsCount)) {
    $rsParamsCount = 0;
}
