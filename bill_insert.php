<?php
	
	$connect = mysqli_connect('localhost','root','','db_patient');

	if(isset($_POST['submit'])){
		$fn1= $_POST['no'];
		$fn2= $_POST['date'];
		$fn3= $_POST['charge'];
		$fn4= $_POST['pathology'];
		$fn5= $_POST['doctor'];

	

	$ins = mysqli_query($connect, "INSERT INTO `tb_bill` (`bill_no`, `date`, `room_charge`, `pathology_fees`, `doctor_fees`) VALUES ('$fn1', '$fn2', '$fn3', '$fn4', '$fn5')");

	if($ins){
		$success = "Value Inserted";
	}

	}




?>


<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
			
	<div>
		
		<center><h3>Bill Information Form</h3></center><br>
		<form action="" method="post">

		   <p align="center"> 
				Bill Number :<input name="no" type="text" placeholder="Bill Number"><br><br>
				Date :<input name="date" type="text" placeholder="Date"><br><br>
				Room charge  :<input name="charge" type="text" placeholder="Room Charge"><br><br>
				Pathology fees  :<input name="pathology" type="text" placeholder="Pathology Fees"><br><br>
				Doctor Fees  :<input name="doctor" type="text" placeholder="Doctor Fees"><br><br>
				
				<input type="submit" name='submit' value="Paid">
			<center><h2><?php if(isset($success)){ echo $success; }  ?></h2></center>
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