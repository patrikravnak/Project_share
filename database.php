<?php

$server = 'localhost';
$uporabnik = 'root';
$geslo = '';
$baza = 'project_share';

$link = mysqli_connect($server, $user, $pass, $database);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "SET NAMES 'utf8'");
$salt = "znj192nijnz";
?>