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
<h1 style="color: aquamarine; text-align: center; width: 100%">Координаты</h1>
<h2>saw</h2>
<?php
require 'point2.php';
$point1 = new Point2();
$point1->x = 3;
$point1->y = 10;
// копирование объекта
$point2 = clone $point1;
$point2->x = 10;
$point2->y = 34;
$distance = sqrt(pow(($point2->x - $point1->x), 2) + pow(($point2->y - $point1->y), 2));

echo "x: $point1->x, y: $point1->y";
echo "<br>";
echo "x: $point2->x, y: $point2->y";
echo "<br>";
echo pow(2, 8);
echo "<br>";
echo sqrt(16);
echo "<br>";

echo "Расстояние между двумя точками:  ";
echo "<br>";
echo "$distance"; // 25


?>
</body>
</html>
