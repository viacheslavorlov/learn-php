<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ООП</title>
</head>
<body>
<?php
require 'point.php';
$point1 = new Point();
$point1->x = 12;
$point1->y = 10;
echo $point1->x + $point1->y;

echo "<br>";

$point2 = new Point();
$point2->x = 1;
$point2->y = 41;
echo $point2->x + $point2->y;
// удалить обхект
unset($point2); // $point2 - больше не существует
// echo "<br>";
// echo $point2->y;
echo "<br>";

echo $point1::$w; //получить значение
// логика копирования объектов как в JS (ссылочные значения)
// склонировать объект можно с помощью "clone"
$point4 = clone $point1;
echo "<br>";

echo "x ={$point4->x} y = {$point4->y} w = {$point4::$w}";
// для переменных можно сделать ссылочные значения добавив амперсант перед переменной без пробела
$variable1 = 5;
$variable2 = &$variable1;
$variable1 = 3 // $variable1 == 3;

?>
</body>
</html>
