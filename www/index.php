<?php
declare(strict_types=1);

$items = [
    0 => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    1 => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    2 => "Pellentesque sapien. Praesent id justo in neque elementum ultrices.",
    3 => "Etiam egestas wisi a erat.",
    4 => "Pellentesque sapien.",
    5 => "Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.",
    6 => "Nullam lectus justo, vulputate eget mollis sed, tempor sed magna.",
    11 => "Aliquam erat volutpat. Praesent in mauris eu tortor porttitor accumsan.",
    8 => "Etiam posuere lacus quis dolor.",
];

echo file_get_contents('./assets/nice-html.html');


$id = getId();

if ($id !== null) {
    printValueFromItems($items, $id);
} else {
    printForm();
}


function printValueFromItems(array $items, int $id): void
{
    try {
        echo "Byla vybrána tato položka: " . getValueFromItems($items, $id);
    } catch (Exception $e) {
        echo 'Chyba: ' . $e->getMessage() . '<br />';
    }
}


function printForm(): void
{
    echo '<form method="get">Zadejte číslo: <input name="id"><input type="submit">';
}


function getValueFromItems(array $items, int $id): ?string
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
