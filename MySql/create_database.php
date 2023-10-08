<?php

//Object oriented

$server="localhost";
$user = "admin";
$password = "Admin@123";


$conn = new mysqli($server, $user, $password);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}

$sql = 'CREATE DATABASE MyDB;';

if($conn->query($sql) === TRUE){
    echo "Database created successfully";
} else{
    echo "Database creation failed : ". $conn->error;
}


$conn->close();
?> 
