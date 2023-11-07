<?php
 $server = getenv("DB_HOST");
 $user = getenv("DB_USER");
 $password = getenv("DB_PASS");
$db = "Task_Manager";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

$sql = "SELECT * FROM tasks";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row= $result->fetch_assoc() ){
        echo "id : " . $row["id"] . "- Task : " . $row["task"] . " ". $row["complete"]. " - entry date : ". $row["entry_date"]."\n.";
    }
} else{
    echo "No records found.";
}

$conn->close();
?>
