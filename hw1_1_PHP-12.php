<?php
$firstname = 'Роман';
$lastname = 'Михайлов';
$age = '32';
$e_mail = 'romable@gmail.com';
$city = 'Москва';
$about = 'Я не волшебник, я только учусь';
?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title>ДЗ № 1.1 by <?php echo $firstname .' '. $lastname; ?></title>
        <meta charset="utf-8">
    </head>
    <body>
     <h2>Страница пользователя <?php echo $firstname; ?></h2>
          <table>
            <tr>
              <td>Имя</td>
              <td><?php echo $firstname; ?></td>
            </tr>
            <tr>
              <td>Фамилия</td>
              <td><?php echo $lastname; ?></td>
            </tr>
            <tr>
              <td>Возраст</td>
              <td><?php echo $age; ?></td>
            </tr>
            <tr>
              <td>Адрес электронной почты</td>
              <td><a href="mailto:<?php echo $e_mail; ?>"><?php echo $e_mail; ?></a></td>
            </tr>
            <tr>
              <td>Город</td>
              <td><?php echo $city; ?></td>
            </tr>
            <tr>
              <td>О себе</td>
              <td><?php echo $about; ?></td>
            </tr>
          </table>
    </body>
</html>
