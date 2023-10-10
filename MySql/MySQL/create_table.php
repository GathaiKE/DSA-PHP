<?php

//Procedural

$server="localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    die("Connection failed :" . mysqli_connect_error());
}

$sql = "CREATE TABLE members (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if(mysqli_query($conn, $sql)){
    echo "Table created successfully!";
} else {
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);
?>