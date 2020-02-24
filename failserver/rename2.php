<?php
$old_file = ('file/' . $_GET['file']);
$new_file = $_GET['name'];
rename($old_file, $new_file);
header("Location: show.php");
