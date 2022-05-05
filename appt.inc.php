<?php

if (isset($_POST["submit"])){
	$date = $_POST["date"];
	$time = $_POST["time"];
	$email = $_POST["email"];
	$year = $_POST["year"];
	$manu = $_POST["manu"];
	$services= $_POST["services"];
	$comment = $_POST["comment"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	
	if (timeExists($conn, $time) !==false) {
		header("location: /appointments.php?error=timetaken");
		exit(); 
	}
	
	createAppt($conn, $date, $time, $email, $year, $manu, $services, $comment);
}

else {
	header("location: appointments.php?error");
	exit();
	
}