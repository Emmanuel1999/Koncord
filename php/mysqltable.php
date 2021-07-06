<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "koncord";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


// //Create database
// $sql = "CREATE DATABASE koncord";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// }
// else {
//     echo "Error creating database: " . $conn->error;
// }

//sql to create table
$sql = "CREATE TABLE Admin (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(15),
    reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Feedback created successfully";
}
else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>