<?php

require './assets/nice-html.php';

$items = [
    1 => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    2 => "Pellentesque sapien. Praesent id justo in neque elementum ultrices.",
    3 => "Etiam egestas wisi a erat.",
    4 => "Pellentesque sapien.",
    5 => "Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.",
    6 => "Nullam lectus justo, vulputate eget mollis sed, tempor sed magna.",
    7 => "Aliquam erat volutpat. Praesent in mauris eu tortor porttitor accumsan.",
    8 => "Etiam posuere lacus quis dolor.",
];

if (isset($_GET['id']) && $_GET['id'] > 0 && ($_GET['id']) <= count($items))
{    
    $id = $_GET['id'];
    
    echo "Byla vybarána tato položka: " . $items[$id];
}
else
{
    echo '<form method="get">Zadejte číslo od 1 do 8: <input name="id"><input type="submit">';
}



