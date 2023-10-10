<?php
$server = "localhost";
$user = "admin";
$password = "Admin@123";
$db = "MyDB";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

$sql = "SELECT * FROM members";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row= $result->fetch_assoc() ){
        echo "id : " . $row["id"] . "- Name : " . $row["firstname"] . " ". $row["lastname"]. " - Email : ". $row["email"]."\n.";
    }
} else{
    echo "No records found.";
}

$conn->close();
?>