<?php
declare (strict_types = 1);

use App\Pages\Homepage;

require __DIR__ . '/../vendor/autoload.php';

$homepage = new Homepage();
$homepage->render();
