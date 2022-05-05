<?php 
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Page</title>
<link href="css\homedesign.css" rel="stylesheet">
</head>

<header>
    <div class="primary_header">
      <h1 class="title"> 781 Autowerks</h1>
    </div>
	  
    <nav class="secondary_header" id="menu">
      <ul>
        <li><a href="home.php">HOME</a></li>
		 <li><a href="storehours.php">STORE HOURS</a></li>
		 <li><a href="services.php">SERVICES</a></li>
		 <li><a href="appointments.php">APPOINTMENTS</a></li>
		 
		 <?php
			 if ( isset( $_SESSION[ "userEmail" ] ) ) {
				echo "<li><a href='logout.inc.php'>Logout</a></li>";
			  } 
			  else {
				echo "<li><a href='login.php'>REGISTER/LOGIN</a></li>";
			  }
		 ?>
     
      </ul>
    </nav>
	  
  </header>