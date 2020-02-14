<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo time();
    // echo "<br>";
    // echo microtime(0);
    // echo "<br>";
    // echo microtime(1);

    // $time_start = microtime(1);

    // for ($i = 0; $i < 1000; $i++) {
    //     // Повторить 1000 раз
    // }

    // $time_end = microtime(1);
    // $time = $time_end - $time_start;
    // echo "Ничего не делал $time";
    // echo "<br>";

    $today = getdate();
    // echo $today['month'];
    // echo "<br>";
    // echo $today['weekday'];

    $rusArray = [
        'Monday' => 'Понедельник',
        'Tuesday' => 'Вторник',
        'Wednesday' => 'Среда',
        'Thurstday' => 'Четверг',
        'Friday' => 'Пятница',
        'Saturday' => 'Суббота',
        'Sunday' => 'Воскресенье',
    ];

    echo $rusArray[$today['weekday']];


    // $rusArrayy = [
    //     0 => 'Понедельник',
    //     1 => 'Вторник',
    //     2 => 'Среда',
    //     3 => 'Четверг',
    //     4 => 'Пятница',
    //     5 => 'Суббота',
    //     6 => 'Воскресенье',
    // ];

    // echo $rusArrayy[$today['weekday']];
    echo "<br>";
    echo date("F j, Y, g:i a");
    echo "<br>";
    echo  date("m.d.y");
    echo "<br>";
    echo  date("j, n, Y");
    echo "<br>";
    echo  date("Ymd");
    echo "<br>";
    echo date('h-i-s, j-m-y, it is w Day');
    echo "<br>";
    echo date('\i\t \i\s \t\h\e jS \d\a\y.');
    echo "<br>";
    echo date("D M j G:i:s T Y");
    echo "<br>";
    echo date('H:m:s \m \i\s\ \m\o\n\t\h');
    echo "<br>";
    echo date("H:i:s");
    echo "<br>";
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, 12, 20, 2007));
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 07));
    ?>
</body>

</html>