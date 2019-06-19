<?php
declare(strict_types=1);

function printNiceHtmlHeader($file): void
{
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        throw new Exception('Soubor "' . $file . '" neexistuje.');
    }
}


function printValueFromItems(array $items, int $id): void
{
    try {
        echo "Byla vybrána tato položka: " . getValueFromItems($items, $id);
    } catch (Exception $e) {
        echo 'Chyba: ' . $e->getMessage();
    }
}


function printForm(): void
{
    echo '<form method="get">Zadejte číslo: <input name="id"><input type="submit">';
}


function getValueFromItems(array $items, int $id): string
{
    if (isset($items[$id])) {
        return $items[$id];
    }

    throw new Exception('Zadali jste neexistující položku');
}


function getId(): ?int
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        return (int)$_GET['id'];
    }

    return null;
}
