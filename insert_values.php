<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_subscriber";


$_subscriber_name=$_POST['sub_name'];
$_subscriber_email=$_POST['sub_email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscribe_data (sub_name,sub_email)
VALUES ('$_subscriber_name','$_subscriber_email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>