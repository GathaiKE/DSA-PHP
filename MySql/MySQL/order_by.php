<?php

$server="localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}

// $lastname = "Trump";

$stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM members ORDER BY firstname");

if(!$stmt){
    die("Prepare error :".$conn->error);
}

// $stmt->bind_param('s',$lastname);

$result = $stmt->execute();

if(!$result){
    die("Execution failure :".$conn->error);
}

$stmt->bind_result($id, $firstname, $lastname, $email);

while($stmt->fetch()){
    echo "Id : ".$id." Name : ".$firstname." ".$lastname." Email : ".$email."\n";
}

$stmt->close();
$conn->close();
?>