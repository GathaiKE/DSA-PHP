<?php
$server = "localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}

$stmt = $conn->prepare("SELECT id,firstname,lastname,email FROM members LIMIT 2,2");

if(!$stmt){
    die("Statement preparation failed :".$conn->error);
}

$result = $stmt->execute();

if(!$result){
    die("Statement Execution failed :".$conn->error);
}

$stmt->bind_result($id, $firstname, $lastname, $email);

while($stmt->fetch()){
    echo "ID : ".$id." Name : ".$firstname." ". $lastname." Email".$email."\n";
}

$stmt->close();
$conn->close();


?>