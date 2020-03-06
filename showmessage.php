<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .BAN {
            margin-left: 325px;
            color: red;
            font-size: 140px;
            transform: rotate(-5deg)
        }

        body {
            background-color: lightcoral ;
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
    $time = time();
    $showtime = date("G:i-d-M-Y");
    $ban = file("ban.txt");
    include("config.php");
    if (in_array($_SERVER['REMOTE_ADDR'], $ban)) {
        echo '<div class = "BAN">Вы забанены!</div>';
    } elseif (!empty($_POST["name"]) && !empty($_POST["chat"])) {
        file_put_contents("mess.txt", $_SERVER['HTTP_USER_AGENT'] . "$separator" . $time . "$separator" . $showtime . "$separator" .  $_SERVER['REMOTE_ADDR'] . "$separator" . $_POST["name"] . "$separator" . $_POST["chat"] . "\n", FILE_APPEND);
    }

    ?>
</body>

</html>