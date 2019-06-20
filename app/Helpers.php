<?php
declare (strict_types = 1);

namespace App;

use Exception;

class Helpers
{
    public static function numberSquare($n): int
    {
        return $n * $n;
    }

    public static function printSomething($n): void
    {
        if (gettype($n) == 'string') {
            echo $n;
        } else {
            echo (string)$n;
        }
    }

    public static function getItems(): array
    {
        $path = __DIR__ . '/../www/data/items.json';
        if (file_exists($path)) {
            $items = json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);

            return $items;
        }

        throw new Exception('Soubor "' . $path . '" neexistuje');
    }

    /**
     * @throws Exception
     */
    public static function printNiceHtmlHeader(): void
    {
        $headerPath = __DIR__ . '/../www/assets/nice-html.html';

        if (file_exists($headerPath)) {
            echo file_get_contents($headerPath);
        } else {
            throw new Exception('Soubor "' . $headerPath . '" neexistuje.');
        }
    }

    public static function printValueFromItems(array $items, int $id): void
    {
        try {
            echo 'Byla vybrána tato položka: ' . Helpers::getValueFromItems($items, $id);
        } catch (Exception $e) {
            echo 'Chyba: ' . $e->getMessage();
        }
    }

    public static function getValueFromItems(array $items, int $id): string
    {
        if (isset($items[$id])) {
            return $items[$id];
        }

        throw new Exception('Zadali jste neexistující položku');
    }

    public static function getId(): ?int
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            return (int)$_GET['id'];
        }

        return null;
    }

    public static function printForm(): void
    {
        echo '<form method="get">Zadejte číslo: <input name="id"><input type="submit">';
    }
}
