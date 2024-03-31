<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Булевые значения, строки</title>
</head>
<body>
<?php
    $bool = true; // или false
    $num = 5;

    $str = "Hello, I am  $bool string "; // автоматическая интерполяция переменных, true приводится к единице, false - пустая строка ""

    $str_1 = "Hello, I am  \"$num\" string \n"; // экранирование кавычек как в JS

    $str_2 = "terminal command 'ls': ";

    echo "{$str}\n";
    echo "<br/>";
    echo "$str_1";
    echo "<br/>";
    echo $str_2, `ls`;
    echo "<br/>";
?>
</body>
</html>

