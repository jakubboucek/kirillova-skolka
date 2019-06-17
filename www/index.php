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

printValueFromItems($items, getId());

function printValueFromItems($items, $key)
{
    $item = getValueFromItems($items, $key);

    echo file_get_contents('./assets/nice-html.html');
    if ($item != null) {
        echo "Byla vybrána tato položka: " . $items[$key];
    } else {
        echo '<form method="get">Zadejte číslo od 1 do 8: <input name="id"><input type="submit">';
    }
}


function getValueFromItems($items, $key)
{
    if ($key !== null) {
        if (isset($items[$key])) {
            return $items[$key];
        }
    }
    return null;
}


function getId(): ?int
{
    if (isset($_GET['id'])) {
        if (is_numeric($_GET['id'])) {
            return (int)$_GET['id'];
        }
    }

    return null;
}
