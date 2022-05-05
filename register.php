
<?php
	include_once 'header.php';
?>


<div class="container">
<body>
  <section>
    <h2 class="noDisplay">Main Content</h2>
	  
    <article class="left_article">
     <h3>Register An Account</h3>
		<div class="regi">
			
		<form action="signup.inc.php" method="post">
			
			<label for="fname">First Name:</label>
				<input type="text" name="fname" placeholder="First name..." required>
			<br>
			<label for="lname">Last Name:</label>
					<input type="text" name="lname" placeholder="Last name..." required>
			<br>
			<label for="address">Street Address:</label>
					<input type="text" name="address" placeholder="Street Address..." required>
			<br>
			<label for="city">City:</label>
					<input type="text" name="city" placeholder="City..." required>
			<br>
			<label for="state">State:</label>
					<input type="text" name="state" placeholder="State..." required>
			<br>
			<label for="cmanu">Car Manufacturer:</label>
					<input type="text" name="cmanu" placeholder="Manufacturer..." required>
			<br>
			<label for="cmodel">Car Model:</label>
					<input type="text" name="cmodel" placeholder="Car Model..." required>
			<br>
			<label for="cyear">Car Year:</label>
					<input type="text" name="cyear" placeholder="Car Year..." required>
			<br>
			<label for="phonenum">Phone Number:</label> 
					<input type="tel" name="phonenum" placeholder="Format: 1234560000" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
			<br>
			<br>
			<label for="email">Email:</label>
					<input type="text" name="email" placeholder="email..." required>
			<br>
			<label for="pwd">Password:</label>
					<input type="password" name="pwd" placeholder="Password" required>
			<br>
			<label for="rpwd">Retype Password:</label>
					<input type="password" name="rpwd" placeholder="Retype Password" required>
			<br>
			<br>
				<button type="submit" name="submit">Register</button>
			
		</form>
	</div>	
    </article>
	  
    <aside class="right_article"><img src="..\ite505-project\autowerks.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
 


  <footer class="secondary_header footer">
    
  </footer>
</div>
</body>
</html>

