<?php
	
	$connect = mysqli_connect('localhost','root','','db_patient');

	if(isset($_POST['submit'])){
		$fn1= $_POST['no'];
		$fn2= $_POST['type'];
		$fn3= $_POST['status'];

	

	$ins = mysqli_query($connect, "INSERT INTO `tb_room` (`r_no`, `r_type`, `r_status`) VALUES ('$fn1', '$fn2', '$fn3')");

	if($ins){
		$success = "Value Inserted";
	}

	}




?>


<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
			
	<div>
		
		<center><h3>Room Booking Form</h3></center><br>
		<form action="" method="post">

		   <p align="center"> 
				Room Number :<input name="no" type="text" placeholder="Room Number"><br><br>
				Room Type :<input name="type" type="text" placeholder="Room Type"><br><br>
				Room Status  :<input name="status" type="text" placeholder="Room Status"><br><br>
				
				<input type="submit" name='submit' value="Confirm">
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