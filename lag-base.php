<?php
include 'connect.php';
// NB!!! Bare eksempel!
// Create database
$sql = "CREATE DATABASE PersonRegister";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
//lag tabell(er)her

$conn->close();
?> 