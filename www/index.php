<?php
declare (strict_types = 1);
require 'libs/fce.php';

printNiceHtmlHeader();

$items = getItems();

$id = getId();

if ($id !== null) {
    printValueFromItems($items, $id);
} else {
    printForm();
}
