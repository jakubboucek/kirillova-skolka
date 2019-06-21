<?php
declare (strict_types = 1);

use App\Helpers;

require __DIR__ . '/../../vendor/autoload.php';

Helpers::printNiceHtmlHeader();
Helpers::getItems();

echo 'This is some great tool for do anything great thinks…';
