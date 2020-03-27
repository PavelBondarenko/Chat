<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Не удалось соединится с сервером");

mysqli_select_db($link, "chat")
    or die("Не удалось выбрать БД");
?>