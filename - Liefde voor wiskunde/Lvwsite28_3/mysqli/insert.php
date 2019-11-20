	<?php
	
	$sqlAdmin = "INSERT INTO `user` (name)
	Values ('NHL Stenden')";
	
	$sqlTeacher1 = "INSERT INTO `teacher` (schoolID, username, password, email, firstName, lastName) 
	VALUES ('1', 'DocentPieter', 'DocentPietertje12', 'pieter.achter@nhlstenden.com', 'Pieter', 'Achter')";
	
	$sqlClass1 = "INSERT INTO `class` (schoolID, teacherID, name) 
	VALUES ('1', '1', 'VO_LWI_lw1')";
	
	$sqlSchool1 = "INSERT INTO `user` (teacherID, classID, username, password, email, firstName, lastName)
	Values ('1', '1', 'admin', '"+ password_hash("admin", PASSWORD_DEFAULT) +"', 'admin@administrator.com', 'admin', 'admin')";
	
	?>