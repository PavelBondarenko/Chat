<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="retext2.php" method="POST">
        <textarea name="name" id="" cols="50" rows="30" <?= file_get_contents('file/' . $_GET['file']) ?>></textarea><br>
        <input type="hidden" name="oldname" value="<?= $_GET['file'] ?>">
        <!-- <input type="submit" value="back" <?= header("Location: show.php") ?>> -->
        <input type="submit" value="save">
    </form>
    <form action="back.php ">
        <input type="submit" value="back">
    </form>
</body>

</html>