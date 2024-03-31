<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Числа</title>
</head>
<body>
<?php
    $num_int = 1234;
    $num_int_positive = +1234;
    $num_int_negative = -1234;
    $num_base_8 = 01234; // в восьмиричной системе исчисления
    $num_base_16 = 0x12f; // в шестнадцатиричнй системе

    echo 07 + 03; //12
    echo "<br/>";
    # echo 08 + 03; // ошибка 8 - не существует в восьмиричной системе
    echo 0xA + 0xF;//25
    echo "<br/>";

    $float_num = 1.234;
    $float_num_2 = 1.234e-3;
    echo "$float_num, $float_num_2";
    //типы данных определяются автоматически!
?>
</body>
</html>
