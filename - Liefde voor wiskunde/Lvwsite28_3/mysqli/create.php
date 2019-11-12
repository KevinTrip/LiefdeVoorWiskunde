<?php
	$sqlUser = "CREATE TABLE `USER` (
	userID INT(6) AUTO_INCREMENT,
	teacherID INT(6) NOT NULL,
	classID INT(6) NOT NULL,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(50) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	firstName VARCHAR(255) NOT NULL,
	lastName VARCHAR(255) NOT NULL,
	PRIMARY KEY (userID),
	FOREIGN KEY (teacherID) REFERENCES TEACHER(teacherID),
	FOREIGN KEY (classID) REFERENCES CLASS(classID)
	)";
	
	$sqlTeacher = "CREATE TABLE `TEACHER` (
	teacherID INT(6) AUTO_INCREMENT,
	schoolID INT(6) NOT NULL,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(50) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	firstName VARCHAR(255) NOT NULL,
	lastName VARCHAR(255) NOT NULL,
	PRIMARY KEY (teacherID),
	FOREIGN KEY (schoolID) REFERENCES SCHOOL(schoolID)
	)";
	
	$sqlSchool = "CREATE TABLE `SCHOOL` (
	schoolID INT(6) AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY (schoolID)
	)";
	
	$sqlClass = "CREATE TABLE `CLASS` (
	classID INT(6)  AUTO_INCREMENT,
	schoolID INT(6) NOT NULL,
	teacherID INT(6) NOT NULL,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY (classID),
	FOREIGN KEY (schoolID) REFERENCES SCHOOL(schoolID),
	FOREIGN KEY (teacherID) REFERENCES TEACHER(teacherID)
	)";
	
	$sqlGrade = "CREATE TABLE `GRADE` (
	exerciseID INT(6) NOT NULL,
	userID INT(6)  NOT NULL,
	classID INT(6) NOT NULL,
	topic VARCHAR(255) NOT NULL,
	grade DOUBLE NOT NULL,
	PRIMARY KEY (exerciseID),
	FOREIGN KEY (exerciseID) REFERENCES EXERCISE(exerciseID),
	FOREIGN KEY (userID) REFERENCES USER(userID),
	FOREIGN KEY (classID) REFERENCES CLASS(classID)
	)";
	
	$sqlExercise = "CREATE TABLE `exercise` (
	exerciseID INT(6) NOT NULL,
	topic VARCHAR(255) NOT NULL,
	PRIMARY KEY (exerciseID)
	)";
	
	$sqlAverage = "CREATE TABLE `AVERAGE` (
	userID INT(6) NOT NULL,
	topic VARCHAR(255) NOT NULL,
	average DOUBLE NOT NULL,
	FOREIGN KEY (userID) REFERENCES USER(userID),
	PRIMARY KEY (userID, topic)
	)";
	
	if(mysqli_query($connect, $sqlSchool) === false) {
		echo "Er is iets misgegaan met het maken van de tabel 'SCHOOL'. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
	}
	else {
		if(mysqli_query($connect, $sqlExercise) === false) {
			echo "Er is iets misgegaan met het maken van de tabel 'EXERCISE'. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
		}
		else {
			if(mysqli_query($connect, $sqlTeacher) === false) {
				echo "Er is iets misgegaan met het maken van de tabel 'TEACHER'. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
			}
			else {
				if(mysqli_query($connect, $sqlClass) === false) {
					echo "Er is iets misgegaan met het maken van de tabel 'CLASS'. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
				}
				else {
					if(mysqli_query($connect, $sqlUser) === false) {
						echo "Er is iets misgegaan met het maken van de tabel 'USER'. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
					}
					else {
						if(mysqli_query($connect, $sqlGrade) === false) {
							echo "Er is iets misgegaan met het maken van de tabel 'GRADE'. Vraag de beheerder naar meer informatie. Onze excuses voor het ongemak";
						}
						else {
							echo "Alle tabellen gemaakt! Topper ben ik he";
						}
					}
				}
			}
		}
	}


?>
	