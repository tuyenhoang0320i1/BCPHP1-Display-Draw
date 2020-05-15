<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>In hinh chu nhat</h2>
<?php

for ($i = 1; $i <=3; $i++) {
    for($j = 1; $j <=7; $j++) {
        echo " * ";
    }
    echo "</br>";
}
?>
<br><br>
<h2>In tam giac vuong</h2>

<?php
for ($i = 1; $i <=5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "</br>";
}
?>
<br><br>

<?php
for ($i = 5; $i >= 1;$i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "</br>";
}
?>
</body>
</html>