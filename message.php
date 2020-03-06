<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="chat.css">
    <title>Document</title>
    <style>
        body {
            background-image: url(unnamed.jpg) no-repeat;
            background-attachment: Fixed;
            background-size: 100%
        }
    </style>
</head>


<body>
    <?php
    $arr = file("mess.txt");
    include "BBCode\bbcode.php";
    include("config.php");
    foreach ($arr as $value) {
        $chat = explode("$separator", $value);
        echo smile(bb_code("<div class='csss'>$chat[2] : $chat[4] : $chat[5]</div>"));
        // echo "<div class = '" . (($key % 2) ? 'odd' : 'even') . "'> $value </div>";
    }
    ?>
</body>

</html>