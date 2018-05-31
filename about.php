<?php
$header = 'Страница пользователя ';
$name = 'Константин';
$age = '31';
$email = 'kanstantsin.litvin@gmail.com';
$city = 'Брест';
$about = 'продавец-консультант';
?>
    <head>
        <title><?= $name . '-' . $about ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Страница пользователя <?= $name ?> </h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $name ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $age ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:$email"><?= $email ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $city ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $about ?></dd>
        </dl>
    </body>