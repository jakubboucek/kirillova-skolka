<?php
declare(strict_types=1);

namespace App\Pages;

use App\Helpers;

class Homepage
{
    public function render(): void
    {
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
