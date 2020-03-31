<?php
include('connect.php');
$del = "DELETE FROM `table1` where `id` = $_GET[id]";
mysqli_query($link, $del);
header('Location: form.php');
