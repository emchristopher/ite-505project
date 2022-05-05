<?php

if (isset($_POST["submit"])){
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$cmanu = $_POST["cmanu"];
	$cmodel = $_POST["cmodel"];
	$cyear = $_POST["cyear"];
	$phonenum = $_POST["phonenum"];
	$email= $_POST["email"];
	$pwd = $_POST["pwd"];
	$rpwd = $_POST["rpwd"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (invalidEmail($email) !==false){
			header("location: register.php?error=invalidEmail");
			exit();
	} 

	
	/* if (pwdMatch($pwd, $rpwd) !==false) {
			header("location: ../register.php?error=passwordsdontmatch");
			exit();
	} */
	
		if (emailExists($conn, $email) !==false) {
			console_log("error");
			header("location: register.php?error=emailused");
			exit();
	}
	
	
	createUser($conn, $fname, $lname, $address, $city, $state, $cmanu, $cmodel, $cyear, $phonenum, $email, $pwd);
}

else {
	header("location: /ite505-project/register.php");
	exit();
}