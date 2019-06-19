<?php
declare (strict_types = 1);
require $_SERVER['DOCUMENT_ROOT'] . 'libs/fce.php';

printNiceHtmlHeader();

$items = getItems();

$id = getId();

if ($id !== null) {
    printValueFromItems($items, $id);
} else {
    printForm();
}
