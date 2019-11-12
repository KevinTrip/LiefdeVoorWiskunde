<?php
	$servername = "localhost";
	$password = "";
	$username = "root";
	$DBname = "LiefdeVoorWiskunde";
	
	$connect = mysqli_connect($servername, $username, $password);
	
	if($connect === false) {
		echo "Er is iets misgegaan. Sorry voor het ongemak!";
		}
	else {
		if(mysqli_select_db($connect, $DBname) === false) {
			echo "Database niet gevonden, er wordt een aangemaakt";
			$sql = "CREATE DATABASE LiefdeVoorWiskunde";
			if(mysqli_query($connect, $sql) === false) {
				echo "Er is iets mis gegaan met het aanmaken van de database";
			}
			else {
				echo "Database gemaakt, tabellen worden gemaakt.";
				if(mysqli_select_db($connect, $DBname) === false) {
					echo "Er is iets misgegaan met het verbinden naar de database. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
				}
				else {
					include("create.php");
				}
			}
		}
		else {
		}
	}
	
	
	//drop DATABASE `liefdevoorwiskunde`
?>
