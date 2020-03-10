<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="POST">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="text" name="name">
        <input type="submit" value="ok">
    </form>
    <?php
    include('function_XMl.php');
    echo "<pre>";
    save_guests_book("data.XML", $_POST['text'], $_POST['name'], date('d-m-y h:i:s'));
    $arr = read_xml("data.XML");
    foreach ($arr as $value) {
        echo $value['name'] . ":" . $value['text'] . $value['date'], "<br>";
    }
    ?>
</body>

</html>