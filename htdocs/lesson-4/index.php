<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Импорт других файлов" ?></title>
</head>
<body>
<?php
echo "<h1>Текущая дата</h1>\n";
echo date(DATE_RSS);
if (true) {
    echo "TRue \r";
    include 'second.php';
    echo "<h1 style='color: aqua'> Главный файл </h1>";
}
?>
</body>
</html><?php
