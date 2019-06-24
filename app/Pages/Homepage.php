<?php
declare(strict_types=1);

namespace App\Pages;

use App\Helpers;
use App\Storage\JsonStorage;

class Homepage
{
    public function render(): void
    {
        echo gettype(JsonStorage::read(__DIR__ . "/../../data/items.json"));

        Helpers::printNiceHtmlHeader();

        $items = Helpers::getItems();

        $id = Helpers::getId();

        if ($id !== null) {
            Helpers::printValueFromItems($items, $id);
        } else {
            Helpers::printForm();
        }
    }
}
