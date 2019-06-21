<?php
declare (strict_types = 1);

namespace App;

class JsonStorage
{
    public static function read(string $filename): array
    {
        return json_decode(FileStorage::read($filename), true, 512, JSON_THROW_ON_ERROR);
    }
}
