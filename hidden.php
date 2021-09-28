<?php
// NB!!! Bare eksempel!
$servername = "localhost";
$username = "hwyohan";
$password = "martinngo123";

// Opprett forbindelse til server. Du har ennå ikke laget databasen,
// så du kan IKKE ta med databasenavn i forbindelsen.
$serverConnection = new mysqli($servername, $username, $password);
// Test om forbindelsen er ok.
if ($serverConnection->connect_error) {
	die("Connection failed: " . $serverConnection->connect_error);
}
//Sett $password tom når du er ferdig
$password = "";