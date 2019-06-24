<?php
declare (strict_types = 1);

namespace App\Storage;

use Exception;

class JsonStorage
{
    public static function read(string $filename)
    {
        return json_decode(FileStorage::read($filename), true, 512, JSON_THROW_ON_ERROR);
    }

    public static function readArray(string $filename): array
    {
        $items = self::read($filename);
        if (is_array($items)) {
            return $items;
        }
        throw new Exception("Chyba: to není pole, sorry");
    }
}
