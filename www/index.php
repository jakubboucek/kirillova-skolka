<?php
declare (strict_types = 1);
require __DIR__ . '/libs/fce.php';

printNiceHtmlHeader();

$items = getItems();

$id = getId();

if ($id !== null) {
    printValueFromItems($items, $id);
} else {
    printForm();
}
