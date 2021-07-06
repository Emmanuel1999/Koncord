<html>
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

// //sql to create table
// $sql = "CREATE TABLE Feedback (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     subject VARCHAR(50),
//     message VARCHAR(255),
//     reg_date TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table Feedback created successfully";
// }
// else {
//     echo "Error creating table: " . $conn->error;
// }

$namer = $_POST["name"];
$emailer = $_POST["email"];
$subjecter = $_POST["subject"];
$messager = $_POST["message"];

// echo "$namer";
// echo "$emailer";
// echo "$subjecter";
// echo "$messager";


$sql = "INSERT INTO Feedback (fullname, email, subject, message) VALUES ('$namer', '$emailer', '$subjecter', '$messager')";

if ($conn->query($sql) === TRUE) {
    echo "Your feedback has been successfully registered";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<h4>To return to the homepage click <a href = "http://localhost/koncord/">this</a> link</h4>
</html>