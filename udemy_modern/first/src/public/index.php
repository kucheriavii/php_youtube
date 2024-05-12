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

//color resistors task
function getColor(string $color): int|string {
    $colorMarkers = ["Green"=>1, "Red"=>2, "Blue"=>3, "Yellow"=>4];
    if (array_key_exists($color, $colorMarkers)){
        return $colorMarkers[$color];
    }  else {
        return "no such color";
    }
}

//one for you task

function oneFor(string|bool $name=False):string{
    if($name){
        return "one for $name one for me";
    } else {
        return "one for you one for me";
    }
}

function leapYear(int $year):bool{
    if (($year%4==0 and $year%100!=0) or $year%400==0) {
        return True;
    } else {
        return False;
    }
}

echo(getColor("Red"));
echo("<br>");
echo(oneFor("Tommy"));
echo("<br>");
echo(oneFor());
echo("<br>");
echo leapYear(1904);


?>
</html>