<?php

session_start();

include("../config/db.php");

if (isset($_SESSION['email'])) {
    header("Location: admin/dashboard.php");
}

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :email");
    $stmt->execute(array(':email' => $email));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($password == $user['password']) {
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/materialize.css">
</head>

<body>

    <div class="container">
        <h1>Login Here</h1>

        <form action="" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>

    </div>

</body>

</html>