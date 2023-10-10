<?php
$server="localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connetion failed :".$conn->connect_error);
}

$lastname = "Doe";

$stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM members WHERE lastname = ?");

if(!$stmt){
    die("Preparation failed :".$conn->error);
}

$stmt->bind_param('s',$lastname);

$result = $stmt->execute();

if(!$result){
    die("Execution failed".$conn->error);
}

$stmt->bind_result($id,$firstname, $lastname, $email);


    while($stmt->fetch()){
        echo "ID : ".$id." - Name : ".$firstname." ".$lastname."-Email : ".$email."\n";
    }

    $stmt->close();
$conn->close();
?>