<?php
$x1 = 1;
$x2 = 1;
$x3 = 0;
$n = $_GET['n'];
$m = (string) '';
echo $x1.'/'.$x2.'/'.$x3.'/ ';
echo '</br>';

while ($x1 < $n) {
  if ($x1 > $n) {
  $m = (string) 'Задуманное число НЕ входит в числовой ряд';
  }
  if ($x1 === $n) {
  $m = (string) 'Задуманное число входит в числовой ряд';
  }

  $x3 = $x1;
  $x1 = $x1+$x2;
  $x2 = $x3;
  echo $x1.'/'.$x2.'/'.$x3.'/ '.$m;
  echo '</br>';
  }
?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Без названия</title>
        <meta charset="utf-8">
        <style>
            dl {
                display: table-row;
            }
            dt, dd {
                display: table-cell;
                border-style: inset;
                padding: 5px 5px;
            }
        </style>

    </head>
    <body>
     <h2>Домашнее задание № 2. Михайлов Роман</h2>
        <dl>
            <dt>X = </dt>
            <dd><?php echo $x1; ?></dd>
        </dl>
        <dl>
            <dt>Y = </dt>
            <dd><?php echo $x2; ?></dd>
        </dl>
        <dl>
            <dt>Число пользователя = </dt>
            <dd><?php echo $n; ?></dd>
        </dl>
        <dl>
            <dt>Сообщение: </dt>
            <dd><?php echo $m; ?></dd>
        </dl>
        <dl>
            <dt>Z = </dt>
            <dd><?php echo $x3; ?></dd>
        </dl>
    </body>
</html>
