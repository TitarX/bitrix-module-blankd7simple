<?php

if (!check_bitrix_sessid()) {
    return;
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

global $APPLICATION;

if (empty($errors)) {
    CAdminMessage::ShowNote(Loc::getMessage('PERFCODE_BLANKD7SIMPLE_MODULE_INSTALLED_SUCCESS'));
} else {
    CAdminMessage::ShowMessage(
        array(
            'TYPE' => 'ERROR',
            'MESSAGE' => Loc::getMessage('PERFCODE_BLANKD7SIMPLE_MODULE_INSTALLED_FAIL'),
            'DETAILS' => $errors,
            'HTML' => true
        )
    );
}
?>

<form method="post" action="<?= $APPLICATION->GetCurPage() ?>">
    <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
    <input type="submit" name="sbutton" value="<?= Loc::getMessage('PERFCODE_BLANKD7SIMPLE_MODULE_BACK_TO_LIST') ?>">
</form>
