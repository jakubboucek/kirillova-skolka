<?php
declare (strict_types = 1);
// require __DIR__ . '/libs/fce.php';

require __DIR__ . '/../vendor/autoload.php';
// use App\Helpers;

App\Helpers::printNiceHtmlHeader();

$items = App\Helpers::getItems();

$id = App\Helpers::getId();

if ($id !== null) {
    App\Helpers::printValueFromItems($items, $id);
} else {
    App\Helpers::printForm();
}
