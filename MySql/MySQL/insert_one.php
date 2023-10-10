<?php

$server = "localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

$sql = "INSERT INTO members (firstname, lastname, email) VALUES('John', 'Doe', 'johndoe@email.com')";


if($conn->query($sql) === TRUE){
    $last_id = $conn->insert_id;
    echo "New reccord added with Id : " . $last_id;
} else{
    echo "Error : " . $conn->error;
}

$conn->close();

?>