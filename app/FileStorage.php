<?php
declare (strict_types = 1);

namespace App;

use Exception;

/**
 * @throws Exception
 */
class FileStorage
{
    public static function read(string $filename): string
    {
        $content = @file_get_contents($filename);
        if ($content === false) {
            throw new Exception('Soubor "' . $filename . '" se nepodařilo načíst.');
        }

        return $content;
    }
}
