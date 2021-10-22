<?php
$databaseHost = 'localhost';
$databaseName = 'school_mng';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$mysqli->set_charset("utf8");
?>