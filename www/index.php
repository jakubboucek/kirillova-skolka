<?php
declare (strict_types = 1);
// require __DIR__ . '/libs/fce.php';

require __DIR__ . '/../vendor/autoload.php';
// use App\Helpers;

Helpers::printNiceHtmlHeader();

$items = Helpers::getItems();

$id = Helpers::getId();

if ($id !== null) {
    Helpers::printValueFromItems($items, $id);
} else {
    Helpers::printForm();
}
