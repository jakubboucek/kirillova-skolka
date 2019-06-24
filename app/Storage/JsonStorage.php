<?php
declare (strict_types = 1);

namespace App\Storage;

use Exception;

class JsonStorage
{
    public static function read(string $filename)
    {
        $json = json_decode(FileStorage::read($filename), false);
        if ($json) {
            return $json;
        }
        throw new Exception("Chyba: it's not valid json");
    }

    public static function readArray(string $filename): array
    {
        $items = json_decode(FileStorage::read($filename), true, 512, JSON_THROW_ON_ERROR);
        if (is_array($items)) {
            return $items;
        }
        throw new Exception("Chyba: to není pole, sorry");
    }
}
