<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Синтаксис в PHP" ?></title>
</head>
<body>
    <?php
        echo "<h1>Текущая дата</h1>";
        echo date(DATE_RSS);
        ?>
    <br/>
    <?php
/*        echo " \n \n ";*/
//        echo 'All';
//        echo 9 + 3 - 4;
//    ?>
    <?php
    if (mt_rand(0,1)) {
        ?>
        <div style="color: blue">Blue</div>
        <?php
    } else {
        ?>
        <div style="color: red">Red</div>
        <?php
    }
    ?>
</body>
</html><?php
