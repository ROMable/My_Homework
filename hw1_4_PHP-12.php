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
// Массив до разбиения
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
    $species_separated = [explode (' ' , $species)];
    var_dump ($species_separated);
  }
    $fauna_separated_names = array ($continent, $species_separated);
  echo '</br>';
}
// Массив из отдельных слов
var_dump ($fauna_separated_names);

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
