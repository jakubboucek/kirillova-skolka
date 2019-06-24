<?php
declare (strict_types = 1);

namespace App\Storage;

use Exception;

class HttpStorage
{
    /**
     * @throws Exception
     */
    public static function read(string $url): string
    {
        $httpContext = stream_context_create(['http'=>[
            'method' => 'GET',
            'ignore_errors' => false,
            'timeout' => 2
        ]]);

        $content = @file_get_contents($url, false, $httpContext);
        if ($content === false) {
            throw new Exception('URL "' . $url . '" se nepodařilo načíst.');
        }

        return $content;
    }
}
