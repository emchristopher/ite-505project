<?php
	include_once 'header.php';
?>

<div class="container">
<body>
  <section>
    <h2 class="noDisplay">Main Content</h2>
    <article class="left_article">
     <h3>Book an Appointment</h3>
		
	<form action="appt.inc.php" method="post">
	
		<div class="appt">
		<label for="calendar">Select a Date:</label>
		<input type="date" id="date" name="date">
			<br>
			<br>
		<label for="time">Select Time Slot:</label>
		<select id="time" name="time">
			<option>Choose time</option>
			<option value="8am">8:00 AM</option>
			<option value="9am">9:00 AM</option>
			<option value="10am">10:00 AM</option>
			<option value="11am">11:00 AM</option>
			<option value="12am">12:00 AM</option>
			<option value="1pm">1:00 PM</option>
			<option value="2pm">2:00 PM</option>
			<option value="3pm">3:00 PM</option>
		</select>
		</div>			
			<br>
			<br>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter Email">
			<br>
			<br>
		<label for="year">Car Year:</label>
		<input type="text" id="year" name="year">
			<br>
			<br>
		<label for="year">Car Manufacturer:</label>
		<input type="text" id="manu" name="manu">
			<br>
			<br>
		<label for="year">Car Model:</label>
		<input type="text" id="model" name="model">
			<br>
			<br>
		<label for="services">Main Service Needed:</label>
		<select id="services" name="services">
			<option>Select Service...</option>
			<option value="oil">Oil Change</option>
			<option value="brakes">Brakes</option>
			<option value="engine">Engine Lookover</option>
			<option value="spark">Spark Plug Replacement</option>
			<option value="alternator">Alternator Replacement</option>
			<option value="starter">Starter Replacement</option>
			<option value="sus">Suspension Work</option>
			<option value="other">Other...</option>
		</select>
		
		<div class="comments">
			<p>Please write down any other problems you may be experiencing in the comment box below. If another service is required feel free to write down what you may want done in the comment box.</p>
		</div>
			<br>
			<br>
		<textarea id="comment" name="comment" rows="4" cols="30" maxlength="300" placeholder="Write a Comment (300 Characters Max)"></textarea>
			<br>
			<br>
		
		<button type="submit" name="submit">Book Appointment</button>
		
	</form>
	
    </article>
    <aside class="right_article"><img src="..\ite505-project\autowerks.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
 


  <footer class="secondary_header footer">
    
  </footer>
</div>
</body>
</html>

