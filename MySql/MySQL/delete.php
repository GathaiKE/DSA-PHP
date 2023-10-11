<?php
$server = "localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";


$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}

$ids = array(5,6,7);

$stmt = $conn->prepare("DELETE FROM members WHERE id =?");

if(!$stmt){
    die("Prepare failed :". $conn->error);
}

$stmt->bind_param('i',$id);

foreach($ids as $id){
    $stmt->execute();
}

echo "Records deleted successfully";

$stmt->close();
$conn ->close();
?>