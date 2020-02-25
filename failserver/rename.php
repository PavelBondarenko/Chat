<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="rename2.php" method="POST">
        <input type="text" name="name" value="<?= $_GET['file'] ?>">
        <input type="hidden" name="oldname" value="<?= $_GET['file'] ?>">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>