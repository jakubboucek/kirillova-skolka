<?php

echo file_get_contents('./assets/nice-html.html');

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

function getId()
{
    if (isset($_GET['id'])) {
        return $_GET['id'];
    } else {
        return null;
    }
}

function getValueFromItems($items, $key)
{
    if ($key!==null) {
        if (isset($items[$key])) {
            echo "Byla vybarána tato položka: " . $items[$key];
        } else {
            echo '<div>Error: Tato polozka neexistuje</div>';
        }
    } else {
        echo '<form method="get">Zadejte číslo od 1 do 8: <input name="id"><input type="submit">';
    }
}

getValueFromItems($items, getId());




