<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ООП</title>
</head>

<body>
	<h1 style="color: brown; text-align: center; width: 100%">Константы 2</h1>
	<?php
		echo 'File path: ' . __DIR__ . '<br>';
		require_once '../lesson-13-ООП/point2.php';

	$point1 = new Point2();
	$point1->x = 3;
	$point1->y = 10;

	echo "x: $point1->x, y: $point1->y";


	// КОНСТАНТЫ в классах через const
	echo "<br>";
	class ConstClass {
		const NAME = 'Constant';
	};
	echo ConstClass::NAME
	?>
</body>

</html>
