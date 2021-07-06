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

$sql = "SELECT id, fullname, email, subject, message FROM feedback";
$result = $conn->query($sql);


$username = $_POST["username"];
$pass = $_POST["pass"];


if ($username == "koncordaccurateconstruction@gmail.com") {
    if ($pass == "avraca4335/?ja134fag1") {
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name : " . $row["fullname"].  " - Email : " . $row["email"]. " - Subject : " . $row["subject"]. " - Message : " . $row["message"]. "<br>";
            }
        }
        else {
            echo "0 results";
        }
    }
    else {
        echo "Wrong password";
    }
}
else {
    echo "Wrong username";
}

?>
<h4>To return to the homepage click <a href = "http://localhost/koncord/">this</a> link</h4>
</html>