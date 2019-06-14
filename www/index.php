<?php
declare(strict_types=1);



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

function getId(): ?int
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        return (int) $_GET['id'];
    } 
    
    return null;
}

function printValueFromItems($items, $key) 
{
    // if ($key!==null) {
    //     if (isset($items[$key])) {
    //         echo "Byla vybrána tato položka: " . $items[$key];
    //     } else {
    //         echo '<div>Error: Tato polozka neexistuje</div>';
    //         http_response_code(404);
    //     }
    // } else {
    //     http_response_code();
    //     echo '<form method="get">Zadejte číslo od 1 do 8: <input name="id"><input type="submit">';
    // }  
}

function getValueFromItems($items, $key)
{
    if ($key!==null) {
        if (isset($items[$key])) {
            return $items[$key];
            // echo "Byla vybrána tato položka: " . $items[$key];
        } else {
            header(http_response_code(404));
            // echo '<div>Error: Tato polozka neexistuje</div>';
        }
    } else {
        header(http_response_code(404));
        // http_response_code();
        // echo '<form method="get">Zadejte číslo od 1 do 8: <input name="id"><input type="submit">';
    }  
}


printValueFromItems($items, getId());



