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
            background-image: url(unnamed.jpg);
            background-attachment: Fixed;
            background-size: 100%;
            
        }
    </style>
</head>


<body>
    <?php
    // $arr = file("mess.txt");
    include('function_XMl.php');
    include "BBCode\bbcode.php";
    include("config.php");
    $arr = read_xml("data.XML");
    foreach ($arr as $value) {
        echo smile(bb_code("<div class='csss'>$value[name] : $value[text] : $value[date]</div>")), "<br>";
    }
    // foreach ($arr as $value) {
    //     $chat = explode("$separator", $value);
    //     echo smile(bb_code("<div class='csss'>$chat[2] : $chat[4] : $chat[5]</div>"));
    //     // echo "<div class = '" . (($key % 2) ? 'odd' : 'even') . "'> $value </div>";
    // }
    ?>
</body>

</html>