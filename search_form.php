<?php require_once('header.php'); ?>

	<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
			
	<div>
		
		
		<form action="patient_search.php" method="post">

		   <p align="center"> 
				Patient ID :<input name="id" type="text" placeholder="Patient ID">
				<input type="submit" name='submit' value="Search"><br><br>
			</p>
		</form>		
		
		
		<form action="doctor_search.php" method="post">  
			<p align="center"> 
				Doctor ID :<input name="id" type="text" placeholder="Doctor ID">
				<input type="submit" name='submit' value="Search"><br><br>
			</p>
		</form>		
		
		
		<form action="room_search.php" method="post">
			<p align="center"> 
				Room Number :<input name="id" type="text" placeholder="Room Number">
				<input type="submit" name='submit' value="Search"><br><br>
				
			</p>
		</form>	
		
		
		<form action="bill_search.php" method="post">
			<p align="center"> 
				Bill Number :<input name="id" type="text" placeholder="Bill Number">
				<input type="submit" name='submit' value="Search"><br><br>
				
			</p>
		</form>		
				
				
				<br><center><h2><?php if(isset($success)){ echo $success; }  ?></h2></center>
			</p>
		</form>
		
	</div>			
			
			
			
	<div class="footer">
				<center><h3>&copy;Tanjina Jahan (G025621)</h3></center>
	</div>	
			
		</div>
		
		
		
		
	</div>
	
</body>
</html>