<?php
$server = "localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection Failed : " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO members(firstname, lastname, email) VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "Donald";
$lastname = "Trump";
$email = "trumpofficial@email.com";
$stmt->execute();

$firstname = "Ivanka";
$lastname = "Trump";
$email = "ivankaofficial@email.com";
$stmt->execute();

echo "Records added successfully";

$stmt ->close();
$conn -> close();
?>