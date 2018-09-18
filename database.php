<?php
$host = 'localhost';
$database = 'project_share';
$user = 'root';
$pass = '';
$charset = 'utf8_slovenian_ci';
$dsn = "mysql:host=$host;dbname=$database;charset=$charset";
$opt = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

$salt = "znj192nijnz";
?>