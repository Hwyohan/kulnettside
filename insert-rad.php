<?php
include 'connect.php';
//DB-tilkobling lagret i $conn
// NB!!! Bare eksempel!
// -------------------------------------------------------------------
// ---------------------------DO NOT USE------------------------------
// -------------------------------------------------------------------
// -------------------------------------------------------------------
// NB! safe-insert.php er mer riktig!!!!!
// -------------------------------------------------------------------
// -------------------------------------------------------------------
// -------------------------------------------------------------------

//Henter data inn fra URL
$firstname = $_GET["fname"]; 
$lastname = $_GET["ename"];
$email = $_GET["email"];
$password = $_GET["pasw"];

//Passord må bli uleselig før det lagres
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO Personer(firstname, lastname, email, password)
VALUES ('$firstname', '$lastname', '$email','$password')";

if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully<br>";
  echo "base oppdatert";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>