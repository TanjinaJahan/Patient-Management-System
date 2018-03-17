<?php
	
	$connect = mysqli_connect('localhost','root','','db_patient');

	if(isset($_POST['submit'])){
		$fn1= $_POST['id'];
		$fn2= $_POST['name'];
		$fn3= $_POST['age'];
		$fn4= $_POST['gender'];
		$fn5= $_POST['address'];
		$fn6= $_POST['contact'];
		$fn7= $_POST['admission'];
		$fn8= $_POST['discharge'];
		$fn9= $_POST['disease'];
		
		
		
	

	$ins = mysqli_query($connect, "INSERT INTO `tb_patient` (`p_id`, `p_name`, `p_age`, `p_gender`, `p_address`, `p_contact`, `admission_date`, `discharge_date`, `disease`) VALUES ('$fn1', '$fn2', '$fn3', '$fn4', '$fn5', '$fn6', '$fn7', '$fn8', '$fn9')");

	if($ins){
		$success = "Value Inserted";
	}

	}




?>

<?php  require_once('header.php');  ?> 


<?php require_once('body.php'); ?>
			<?php  require_once('menu.php');  ?> 
			
	<div>
		
		<center><h3>Patient Registration Form</h3></center><br>
		<form action="" method="post">

		   <p align="center"> 
				Patient ID :<input name="id" type="text" placeholder="ID">
				Patient Name :<input name="name" type="text" placeholder="Name"><br><br>
				Age  :<input name="age" type="text" placeholder="Age">
				Gender  :<input name="gender" type="text" placeholder="Gender"><br><br>
				Address  :<input name="address" type="text" placeholder="Address">
				Contact Number  :<input name="contact" type="text" placeholder="Contact"><br><br>
				Admission Date  :<input name="admission" type="text" placeholder="Admission">
				Discharge Date  :<input name="discharge" type="text" placeholder="Discharge"><br><br>
				Disease  :<input name="disease" type="text" placeholder="Disease"><br><br>
				
				
				<input type="submit" name='submit' value="Submit">
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