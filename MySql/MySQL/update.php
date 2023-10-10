<?php
$server = "localhost";
$user ="admin";
$password = "Admin@123";
$db ="MyDB";


$conn= new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection to database failed :".$conn->connect_error);
}

$id = 3;
$firstname="Jannifer";
$lastname = "Dorsell";
$email = "jdorsell@email.com";

$stmt = $conn->prepare("UPDATE members SET firstname = ?,lastname = ?,email = ? WHERE id = $id");
$stmt->bind_param('sss',$firstname,$lastname,$email);

if(!$stmt){
    die("Prepare failed!".$conn->error);  
}

$stmt->execute();

echo "Update successfull!";

$stmt->close();
$conn->close();





?>