<?php
	if(!empty($_POST['username']) || !empty($_POST['password'])) {
		
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		// de variabelen lokaal maken.
		
		include("connect.php");
		
		
	}
	else {
		
	}
?>