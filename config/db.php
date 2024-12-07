<?php


$servername = "localhost";
$username = "u616153323_corphash";
$password = "qVL8~q7~";
$dbname = "u616153323_corphash";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

include("./helper.php");
