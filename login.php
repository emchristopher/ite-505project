<?php
	include_once 'header.php';
?>


<div class="container">
<body>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
     <h3>Login to your account</h3>
	 	 
		<form action="login.inc.php" method="post">
				<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" required>
					<br>
					<br>
				<label for="pwd">Password:</label>
					<input type="password" name="pwd" placeholder="Enter Password" required>
		<br>
		<br>
				<button type="submit" name="submit">Login</button>
		</form>		
		<p><a class="book" href="register.php">Dont Have an account? Register Here!</a></p>
		
    </article>
    <aside class="right_article"><img src="..\ite505-project\autowerks.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
 
  <?php

    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Please fill in the Fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect Login</p>";
      }
    }
  ?>


  <footer class="secondary_header footer">
    
  </footer>
</div>
</body>
</html>

