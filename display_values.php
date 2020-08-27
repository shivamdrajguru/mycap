<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_subscriber";
// Create connection
$conn = new mysqli($servername, $username, 
	$password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sub_name , sub_email FROM subscribe_data";



?>
<table border="1" >
	<tr>
		<th>name</th>
		<th>email</th>
	</tr>
<?php

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
     <tr> <td><?php  echo  $row["sub_name"]; ?></td> 
     	  <td><?php  echo  $row["sub_email"]; ?></td> 
     </tr>
      <?php
    
  }
} else {
  echo "0 results";
}


?>
</table>
<?php
$conn->close();
?>