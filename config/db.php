<?php

include("helper.php");

$servername = processEnv("servername");
$username = processEnv("username");
$password = processEnv("password");
$dbname = processEnv("username");

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
