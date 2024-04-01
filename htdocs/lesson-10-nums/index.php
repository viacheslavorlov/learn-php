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
$test = array(
        '42',
        52,
        0x123A,
        "0x123A",
        "0o8778",
        "not num",
        array(),
        9.1,
        "8.1",
        123e7,
        "123e7",
        null
);

foreach ($test as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " - число", PHP_EOL . "<br>";
    } else {
        echo var_export($element, true) . " - НЕ число", PHP_EOL . "<br>";
    }
}

//round
echo round(23.42921313, 0);
echo round(23.42921313, 0, PHP_ROUND_HALF_UP)
?>
</body>
</html>

