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
			echo "Er is iets misgegaan. Sorry voor het ongemak!";
			$sql = "CREATE DATABASE LiefdeVoorWiskunde";
			if(mysqli_query($connect, $sql) === false) {
				echo "Er is iets mis gegaan met het aanmaken van de database";
			}
			else {
				echo "Database gemaakt!";
			}
		}
		else {
			echo "connected succesful to database";
		}
		echo "connected succesful";
	}
?>