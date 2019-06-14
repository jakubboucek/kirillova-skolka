<?php

require './assets/nice-html.php';

$id = $_GET['id'];

$items = [
    1 => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    2 => "Pellentesque sapien. Praesent id justo in neque elementum ultrices.",
    3 => "Etiam egestas wisi a erat.",
    4 => "Pellentesque sapien.",
    5 => "Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.",
    5 => "Nullam lectus justo, vulputate eget mollis sed, tempor sed magna.",
    6 => "Aliquam erat volutpat. Praesent in mauris eu tortor porttitor accumsan.",
    7 => "Etiam posuere lacus quis dolor.",
];

if ($id > 0) {
    echo "Byla vybarána tato položka: " . $items[$id];
} else {
    echo "<form method=get>Zadejte číslo od 1 do 7: <input name=id><input type=submit>";
}
