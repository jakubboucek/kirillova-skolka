<?php
declare (strict_types = 1);

namespace App\Storage;

use Exception;

class JsonStorage
{
    public static function read(string $filename): object
    {
        return json_decode(FileStorage::read($filename), false, 512, JSON_THROW_ON_ERROR);
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
