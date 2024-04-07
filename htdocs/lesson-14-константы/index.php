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
<h1 style="color: brown; text-align: center; width: 100%">Константы</h1>
    <?php
    define('NUMBER', 1);
    echo NUMBER;

    echo "<br>";

    if (define('NUM2', 3)) {
        echo "Константа NUM2 создана со значением 3";
    }
//    echo "<br>";
    // второй раз константа не создасться и текст не будет выведен
//    if (!define('NUM2', 3)) {
//        echo "Константа NUM2 создана со значением 3";
//    }

    echo "<br>";
    // проверить есть эта константа или нет
    if (defined('NUM2')) {
        echo "Константа NUM2 уже создана";
    }
    echo "<br>";
    $num = mt_rand(1, 10);
    $name = "VALUE($num)";
    define($name, $num);

    echo "Значение константы: " . constant($name);
    echo "<br>";

    // некоторые стандартные константы
    echo 'Имя файла ' . __FILE__ . '<br>';

    echo 'Строка ' . __LINE__ . '<br>';

    ?>
</body>
</html>
