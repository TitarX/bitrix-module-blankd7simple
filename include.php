<?php

use Bitrix\Main\Loader;

// При правильном именовании, классы подключаются автоматически. Имена файлов классов должны быть в нижнем регистре.
Loader::registerAutoloadClasses(
    'perfcode.blankd7simple',
    [
        'Perfcode\Blankd7simple\Events\MainEvents' => 'lib/events/MainEvents.php',
        'Perfcode\Blankd7simple\Helpers\MiscHelper' => 'lib/helpers/MiscHelper.php'
    ]
);
