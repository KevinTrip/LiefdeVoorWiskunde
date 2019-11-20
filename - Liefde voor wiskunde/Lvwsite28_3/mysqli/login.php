<?php
    // Sessie maken
	session_start();
	
	//Hier wordt gecheckt of de gebruiker al ingelogd is, zo ja dan gaat de gebruiker naar de homepagina
	if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) {
		header("index.php");
		exit;
	}
	if(!empty($_POST['username']) || !empty($_POST['password'])) {
		
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		// de variabelen lokaal maken.
		
		//Database wordt geconnect
		include("connect.php");
		
		//opnieuw connecten vanwege statement sql
		$servername = "localhost";
		$password = "";
		$username = "root";
		$DBname = "LiefdeVoorWiskunde";
	
		$connect = mysqli_connect($servername, $username, $password, $DBname);
		
		//sql schrijven voor vinden van de user
		$sql = "SELECT userID, username, password FROM USER WHERE username = ?";
		
		$stmt = mysqli_prepare($connect, $string);
		if(mysqli_stmt_bind_param($stmt, 's', $username)) {
			if(mysqli_stmt_execute($stmt)) {
				if(mysqli_stmt_bind_result($stmt, $userID, $usernameCheck, $passwordCheck)) {
					while(mysqli_stmt_fetch($stmt)) {
						if ($username === $usernameCheck) {
							if (!password_verify($password, $passwordCheck)) {
								die();
							}
							else {
								$_SESSION["loggedin"] = TRUE;
								$_SESSION["ID"] = $userID;
								$_SESSION["username"] = $username;
							}
						}
					}
				}
			}
		}
		
	}
	else {
		
	}
?>