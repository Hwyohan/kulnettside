<?php
//kobler til database
include 'connect.php';
//forbindelsen lagret i variablen $conn

//Tar imotdata fra skjema
$firstname = $_POST["fname"];
$lastname = $_POST["ename"];
$email = $_POST["email"];
$password = $_POST["pasw"];

//Passord må bli uleselig før det lagres
$password = password_hash($password, PASSWORD_DEFAULT);

//Setter opp en forhåndstolket SQL med nye data som parametere. 
//Nå blir ulovlige tegn og kode kun data og kan ikke endre sql-setningen.
$sqlSetning = $conn->prepare("INSERT INTO Personer (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
$sqlSetning->bind_param("ssss", $firstname, $lastname, $email, $password);

//Kjører setningen med gjeldene datasett
$sqlSetning->execute();

echo "Hei ".$firstname."<br>";
echo "Du er nå registrert i vår database.<br>HUSK passordet!";
$sqlSetning->close();
$conn->close();
?> 