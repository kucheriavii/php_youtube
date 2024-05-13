<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Start project</h1>
</body>
<?php
//    echo PHP_VERSION . "<br>";
//    echo PHP_INT_MAX . "<br>";
//    echo PHP_INT_MIN . "<br>";
//    echo __FILE__ . "<br>";
//    echo __LINE__ . "<br>";

    if(!defined("FOO")){
        define('FOO', 'Hello world');
    }
    echo  FOO;

?>
</html>