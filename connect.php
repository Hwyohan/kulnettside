<?php
// phpinfo();
// Nå er alt satt opp riktig.
// Du vil koble til serveren "vinhvirtualos.loc" med brukernavn "hwyohan" og passord "martinngo123" på databasen "test"
$servername = "127.0.0.1"; // 0.0.0.0, localhost er en alias for 0.0.0.0 og 127.0.0.1
$username = "hwyohan";
$password = "martinngo123";
$dbname = "PersonRegister";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); // Her bruker du de variablene til å koble på databasen, dvs.
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>