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
            font-size: 150px;
        }
    </style>
</head>

<body>
    <form action="?" method="POST">
        <input type="text" name="name" value="<?= !empty($_POST['name']) ? $_POST['name'] : "" ?>" placeholder="Введите имя">
        <input type="text" name="chat" placeholder="Введите сообщение">
        <input type="submit" value="ok">
    </form>

    <?php
    $s = file
    if (($_SERVER['REMOTE_ADDR'] != in_array(127.0.0.1)) && (!empty($_POST["name"]))) {
        file_put_contents("mess.txt", $_SERVER['HTTP_USER_AGENT'] . ":" .  $_SERVER['REMOTE_ADDR'] . ":" . $_POST["name"] . ":" . $_POST["chat"] . "\n", FILE_APPEND);
    } else {
        echo '<div class = "BAN">Вы забанены!</div>';
    }
    ?>
</body>

</html>