<?php
$firstname = 'Роман';
$lastname = 'Михайлов';
$age = '32';
$e_mail = 'romable@gmail.com';
$city = 'Москва';
$about = 'Новичок в IT';
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
     <h2>Страница пользователя <?php echo $firstname; ?></h2>
        <dl>
            <dt>Имя</dt>
            <dd><?php echo $firstname; ?></dd>
        </dl>
        <dl>
            <dt>Фамилия</dt>
            <dd><?php echo $lastname; ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?php echo $age; ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="<?php echo $e_mail; ?>"><?php echo $e_mail; ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?php echo $city; ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?php echo $about; ?></dd>
        </dl>
    </body>
</html>
