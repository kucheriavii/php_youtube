<?php


require __DIR__ . '/../vendor/autoload.php'; //замість тисячі require_once

$collector = new App\CollectionAgency();

echo $collector->collect(100) . PHP_EOL;


//docker exec -it test_php bash -to run docker
//composer dump-autoload - to update autoloads


