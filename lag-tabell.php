<?php
include 'connect.php';
// NB!!! Bare eksempel!
//server_connection.php bruker navnet $serverConnection på forbindelsen.

//disse to variablene kan du senere gi innhold med et skjema og $_POST
$database = "PersonRegister";
$tableName = "Personer";

$serverConnection -> select_db($database);

// sql to create table
$sql = "CREATE TABLE Personer (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(255) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  //Passordfeltet må ha god plass til kryptert versjon.
  if ($conn->query($sql) === TRUE) {
    echo "Table Personer created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
  ?>