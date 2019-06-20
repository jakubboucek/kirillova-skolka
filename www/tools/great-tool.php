<?php
declare (strict_types = 1);

require __DIR__ . '/../../vendor/autoload.php';

// require __DIR__ . '/../libs/fce.php';

App\Helpers::printNiceHtmlHeader();
App\Helpers::getItems();

echo 'This is some great tool for do anything great thinks…';
