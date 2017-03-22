<?php
$content = file_get_contents ('http://api.openweathermap.org/data/2.5/weather?q=Moscow&appid=4b4c6388094b33baacb43cb677b27c64');
$user = json_decode ($content, true);

//var_dump ($user);

$city = $user["name"];
$tempC = round($user ["main"]["temp"] - 273.15);
if (0 < $tempC)
  {
    $tempC = (string)'+'.$tempC;
  };
$pressure = round($user["main"]["pressure"]*100 / (float)133.32);
?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Без названия</title>
        <meta charset="utf-8">
    </head>
    <body>
     <h2>Домашнее задание № 4. Михайлов Роман</h2>
     </br>
     <p><strong>Погода на сегодня в городе:</strong>
     <?php echo $city; ?>
     </p>
     <p><strong>Средняя темература воздуха:</strong>
     <?php echo $tempC; ?>
     °C </p>
     <p><strong>Атмосферное давление:</strong>
     <?php echo $pressure; ?>
     мм рт. ст. </p>
   </body>
</html>
