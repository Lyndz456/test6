<?php
$servername = "localhost";
$username = "root";
$password = "";//if the you leave this section without anything to indicate that we do not know the password but it exists that is why we do not space
$dbname= "run_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);//do not interchange sequence 

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>