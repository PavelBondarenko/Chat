<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="rename2.php" method="post">
        <input type="text" name="uss" value="<?= $_GET['name']?>">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>