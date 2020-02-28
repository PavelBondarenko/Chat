<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if (preg_match('/@/', '')) {
    //     echo 'да';
    // } else
    //     echo 'нет';

    if (preg_match("/php/i", "PHP is programming language.")) { // Символ "i" посел закрывающего ограничителя означает регистронезависимый поиск.
        echo "Вхождение найдено.";
    } else
        echo "Вхождение не найдено.";
    echo  '<br>';

    $str = 'hypertext3language4programming';
    $chars = preg_split('/\d/', $str);
    print_r($chars);
    echo  "<br>";
    $str = "be";

    $pat = "/(^be$)|(^not\sto\sbe$)/i";

    if (preg_match($pat, $str)) {
        echo "Вхождение найдено.";
    } else
        echo "Вхождение не найдено.";

    echo  "<br>";
    $str = "Всем <b>Привет</b> !!!";
    $pat = "/<b>.*<\/b>/i";
    $rep = "<i>$0</i>";

    $str2 = preg_replace($pat, $rep, $str);
    echo $str2;

    echo  "<br>";
    $str = "Всем <b>Привет</b> !!!";
    $pat = "/<b>(.*)<\/b>/i";
    $rep = "<i>$1</i>";

    $str2 = preg_replace($pat, $rep, $str);
    echo $str2;
    ?>
</body>

</html>