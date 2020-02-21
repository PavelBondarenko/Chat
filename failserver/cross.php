<?php
unlink('file/' . $_GET['file']);
header("Location: show.php");