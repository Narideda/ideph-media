<?php
if($_POST['submited']){
  echo "yessssssssssssssssssss";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ideph_media";

// Create connection
$conn = new mysqli($servername, $username, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (`firstname`, `lastname`, `email`, `subject`, `message`)
VALUES ('John', 'Doe', 'john@example.com', 'word', 'message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>