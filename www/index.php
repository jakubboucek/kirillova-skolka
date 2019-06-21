<?php
declare (strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

use App\Helpers;

echo json_encode(["a" => "b", "b", "c"]) . '<br />';
echo json_encode(["a", "b", "c"]);

Helpers::printNiceHtmlHeader();

$items = Helpers::getItems();

$id = Helpers::getId();

if ($id !== null) {
    Helpers::printValueFromItems($items, $id);
} else {
    Helpers::printForm();
}
