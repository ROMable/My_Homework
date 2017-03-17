<?php
$fauna = [
  'Eurasia' => [
  'Rangifer tarandus',
  'Martes zibellina'
  ],
  'Africa' => [
  'Diceros bicornis',
  'Gorilla gorilla gorilla'
  ],
  'North America' => [
  'Canis latrans',
  'Crotalus atrox'
  ],
  'South America' => [
  'Vicugna vicugna',
  'Pygocentrus nattereri'
  ],
  'Antarctica' => [
  'Physeter macrocephalus',
  'Eudyptes chrysolophus'
  ],
  'Australia' => [
  'Ornithorhynchus anatinus',
  'Canis lupus dingo'
  ],
];

echo '<h3>Массив № 1</h3>';

foreach ($fauna as $continent => $animals)
{
  echo "Животные континента $continent:";
  echo '</br>';
  $i = 0;
  foreach ($animals as $number => $species)
  {
    $i++;
    echo "$i" . ". " . "$species";
    echo '</br>';
  }
  echo '</br>';
}

?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Без названия</title>
        <meta charset="utf-8">
    </head>
    <body>
     <h2>Домашнее задание № 3. Михайлов Роман</h2>
   </body>
</html>
