<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fileNameArrray = explode(".", $_GET['file']);
    $ext = $fileNameArrray[count($fileNameArrray) - 1];
    unset($fileNameArrray[count($fileNameArrray) - 1]);
    $filename = implode(".", $fileNameArrray);
    ?>
    <form action="rename2.php" method="POST">
        <input type="text" name="name" value="<?= $filename ?>">
        <input type="hidden" name="oldname" value="<?= $_GET['file'] ?>">
        <input type="hidden" name="ext" value="<?= $ext ?>">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>