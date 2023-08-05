<?php

//  PDO Connection
$servername = "localhost";
$username = "u511675806_corphash";
$password = "qVL8~q7~";
$dbname = "u511675806_corphash";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

header("Content-Type: application/json; charset=utf-8");


// Check connection
if ($conn->connect_error) {
    // return json type error response
    echo json_encode(array(
        "success" => false,
        "message" => "Connection failed: " . $conn->connect_error,
    ))
    die("Connection failed: " . $conn->connect_error);

}

// save data

try{
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $stmt = $conn->prepare("INSERT INTO contactus(name, email, message) VALUES (:name, :email, :message)");
        $stmt->execute(array(
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ));

        echo json_encode(array(
            "success" => true,
            "message" => "Message sent successfully",

        ));

    }else{
        echo json_encode(array(
            "success" => false,
            "message" => "Please fill all the fields",
        ));

    }

}catch(Exception $e){
    echo $e->getMessage();
}

// Close connection
$conn = null;
