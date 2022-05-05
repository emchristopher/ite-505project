<?php

function invalidEmail($email){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else {
		$result = false;
		}
	return $result;
}


function emailExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: /register.php?error=stmterror");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);


	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

/* function pwdMatch($pwd, $rpwd) {
	$result;
	if ($pwd !== $rpwd){
		$result = true;
	}
	else {
		$result = false;
		}
	return $return;
} */

function createUser($conn, $fname, $lname, $address, $city, $state, $cmanu, $cmodel, $cyear, $phonenum, $email, $pwd) {
	$sql = "INSERT INTO users (usersFname, usersLname, usersAddress, usersCity, usersState, usersCmanu, usersCmodel, usersCYear, usersPNumber, usersEmail, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) { 
	 	header("location: /register.php?error=stmterror");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "sssssssssss", $fname, $lname, $address, $city, $state, $cmanu, $cmodel, $cyear, $phonenum, $email, $pwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: register.php");
	//echo html thank you for registering
	
	exit();
}

function loginUser($conn, $email, $pwd) {
	$emailExists = emailExists($conn, $email);
	
	if($emailExists === false){
		header("location: /login.php?error=wronglogin");
		exit();
	}
	
	session_start();
	$_SESSION["userEmail"] = $emailExists["usersEmail"];
	header("location: home.php");
	exit();

}

function timeExists($conn, $time) {
    $sql = "SELECT * FROM appt WHERE apptTime = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: /appointments.php?error=stmterrortime");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $time);
	mysqli_stmt_execute($stmt);


	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createAppt($conn, $date, $time, $email, $year, $manu, $services, $comments) {
	$sql = "INSERT INTO appt (apptDate, apptTime, apptEmail, apptYear, apptManu, apptServices, apptComments) VALUES (?, ?, ?, ?, ?, ?, ?);";
	header("location: thankyou.php");
	exit();
	
	/* $stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: /appointments.php?error=stmterror");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "sssssss",  $date, $time, $email, $year, $manu, $services, $comments);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: /appointments.php");
	exit(); */
}


	