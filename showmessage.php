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
            background-color: lightcoral;
        }
    </style>
</head>

<body>
    <form action="?" method="POST">
        <input type="text" name="name" value="<?= !empty($_POST['name']) ? $_POST['name'] : "" ?>" placeholder="Введите имя">
        <input type="text" name="text" placeholder="Введите сообщение">
        <input type="submit" value="Отправить">
    </form>

    <?php
    // $time = time();
    // $showtime = date("G:i-d-M-Y");
    include('function_XMl.php');
    $ban = file_get_contents("ban.txt");
    include("config.php");
    if (preg_match("/" . $ban . "/iu", $_POST["text"])) {
        echo '<div class = "BAN">Вы забанены!</div>';
    } elseif (!empty($_POST["name"]) && !empty($_POST["text"])) {
        save_guests_book("data.XML", $_POST['text'], $_POST['name'], date('G:i-d-M-Y'));
    }

    ?>
</body>

</html>