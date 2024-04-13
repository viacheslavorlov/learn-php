<!doctype html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Операторы</title>
</head>

<body>
	<h1>Математическин</h1>
	<?php
	$num = 41;
	echo 4 ** 2; //16
	echo "<br>";
	echo 7 % 3; //1 - деление по модулю.
	echo "<br>";
	echo 8 / 3; //2.67 деление
	echo "<br>";
	echo (int) (8 / 3); //2 - деление по модулю.
	echo "<br>";
	echo $num++; // 41 постфикс увеличивает переменную после её использования
	echo "<br>";
	echo ++$num; // Префиксная запись увеличивает переменную до ее использования.
	
	?>
</body>

</html>
