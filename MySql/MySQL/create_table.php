<?php

//Procedural

$server="localhost";
$user = "admin";
$password = "Admin@123";
$db = "Realers";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    die("Connection failed :" . mysqli_connect_error());
}

// $sql = "CREATE TABLE appartments (
//     appart_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     appart_name VARCHAR(30) NOT NULL,
//     rooms_count INT(6) NOT NULL,
//     description VARCHAR(200) NOT NULL,
//     appart_picture VARCHAR(200) NOT NULL,
//     location VARCHAR(200) NOT NULL
// )";

// $sql = "CREATE TABLE costs (
//     cost_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     bedsitter INT(6),
//     onebr INT(6),
//     twobr INT(6),
//     threebr INT(6),
//     fourbr INT(6),
//     fivebr INT(6),
//     sixbr INT(6),
//     appart_id INT(6) UNSIGNED,

//     FOREIGN KEY (appart_id) REFERENCES appartments (appart_id) ON DELETE CASCADE
// )";

$sql = "CREATE TABLE paid_rent (
    payment_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    amount INT(10) NOT NULL,
payment_code VARCHAR(200) NOT NULL,
    	occby_id INT(6) UNSIGNED NOT NULL,

    FOREIGN KEY (occby_id) REFERENCES occupied_by (id) ON DELETE CASCADE
    )";


if(mysqli_query($conn, $sql)){
    echo "Table created successfully!";
} else {
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);
?>
