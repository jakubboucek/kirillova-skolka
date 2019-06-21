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
        if (is_string($n)) {
            echo $n;
        } else {
            echo (string)$n;
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public static function getItems(): array
    {
        $path = __DIR__ . '/../www/data/items.json';
        $items = json_decode(FileStorage::read($path), true, 512, JSON_THROW_ON_ERROR);
        return $items;
    }

    public static function printNiceHtmlHeader(): void
    {
        $headerPath = __DIR__ . '/../www/assets/nice-html.html';
        echo FileStorage::read($headerPath);
    }

    public static function printValueFromItems(array $items, int $id): void
    {
        try {
            echo 'Byla vybrána tato položka: ' . self::getValueFromItems($items, $id);
        } catch (Exception $e) {
            echo 'Chyba: ' . $e->getMessage();
        }
    }

    /**
     * @param array $items
     * @param int $id
     * @return string
     * @throws Exception
     */
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
