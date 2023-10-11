<?php

$server = "localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    die("Connection Error : " . mysqli_connect_error());
}

$sql = "INSERT INTO members (firstname, lastname, email) VALUES('Jane', 'Doe', 'janedoe@email.com');";

$sql .= "INSERT INTO members (firstname, lastname, email) VALUES('Bernice', 'Thea', 'bernice@email.com');";

$sql .= "INSERT INTO members (firstname, lastname, email) VALUES('Lawrence', 'Martin', 'matlawrence@email.com')";


if(mysqli_multi_query($conn, $sql)){
    echo "Records added successfully";
} else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>