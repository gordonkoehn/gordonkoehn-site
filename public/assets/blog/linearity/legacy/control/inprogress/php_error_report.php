<?php
$file = $_GET['file'];

echo "<h3>ERROR:</h3> </br>";

error_reporting(E_ALL);
ini_set("display_errors", 1);
include($file);
?>