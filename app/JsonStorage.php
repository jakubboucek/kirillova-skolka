<?php
declare (strict_types = 1);

namespace App;

class JsonStorage extends FileStorage
{
    public function read($filename): array
    {
        return json_decode(parent::read($filename), true, 512, JSON_THROW_ON_ERROR);
    }
}
