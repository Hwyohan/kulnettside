<?php
//kobler til database
include 'connect.php';

//forbindelsen lagret i variablen $conn

$sql = "SELECT id, firstname, lastname, email, password FROM Personer ORDER BY id ASC LIMIT 10 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: ".$row["id"]." - Name: ".$row["firstname"]." ".$row["lastname"].". ";
	  echo " - Email: ".$row["email"]." "."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 