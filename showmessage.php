<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .BAN{
            margin-left: 325px;
            color: red;
            font-size: 140px;
            transform: rotate(-5deg)
        }
    </style>
</head>

<body>
    <form action="?" method="POST">
        <input type="text" name="name" value="<?= !empty($_POST['name']) ? $_POST['name'] : "" ?>" placeholder="Введите имя">
        <input type="text" name="chat" placeholder="Введите сообщение">
        <input type="submit" value="Отправить">
    </form>

    <?php
    $ban = file("ban.txt");


    if (in_array($_SERVER['REMOTE_ADDR'], $ban)) {
       echo '<div class = "BAN">Вы забанены!</div>';
    } else {
        file_put_contents("mess.txt", $_SERVER['HTTP_USER_AGENT'] . ":" .  $_SERVER['REMOTE_ADDR'] . ":" . $_POST["name"] . ":" . $_POST["chat"] . "\n", FILE_APPEND);
    }
    ?>
</body>

</html>