<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Встроенные функции</title>
</head>
<body>
<?php
    $var = 5;
    if (isset($var)) {
        echo "Var is set";
    } else {
        echo "Var is not set";
    }
    $str = '';
    if (empty($str)) {
        echo "Строка пустая";
    } else {
        echo "В строке что то есть";
    }
    echo "<br/>";
    echo gettype($var);// integer
    echo "<br/>";
    echo gettype($str); //string
    echo "<br/>";
    echo gettype(true); //boolean
    echo "<br/>";
    echo gettype(1.998); //double
    echo "<br/>";
    // is_int is_..... и другие функции проверки типов
    echo is_int(1.998); //false
?>
</body>
</html>

