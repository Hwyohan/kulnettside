<?php
include 'connect.php';
// NB!!! Bare eksempel!
//disse variablene bør få innhold fra et  skjema i stedet.
//Til det bruker vi en htmlside.
$firstname = "johan"; 
$lastname = "mark";
$email = "woof@dog.bark";
$password = "123";

//Passord må bli uleselig før det lagres
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO Personer(firstname, lastname, email, password)
//navnene her er de samme som ble laget i tabellen og i samme rekkefølge.

VALUES ('$firstname', '$lastname', '$email','$password')";
//her sendes innholdet i variablene. Merk anførselstegnene ''

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// 4(5) språk
// - HTML, lage nettside
// - CSS, style nettside
// - PHP, alternativ til javascript + database stuff
// - SQL, lage,endre,slette database rader/kolumner
?>