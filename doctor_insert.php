<?php
	
	$connect = mysqli_connect('localhost','root','','db_patient');

	if(isset($_POST['submit'])){
		$fn1= $_POST['id'];
		$fn2= $_POST['name'];
		$fn3= $_POST['dept'];

	

	$ins = mysqli_query($connect, "INSERT INTO tb_doctor(d_id, d_name, dept) VALUES('$fn1','$fn2','$fn3')  ");

	if($ins){
		$success = "Value Inserted";
	}

	}




?>


<?php require_once('header.php'); ?>

	<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
			
	<div>
		
		<center><h3>Doctor Registration Form</h3></center><br>
		<form action="" method="post">

		   <p align="center"> 
				Doctor ID :<input name="id" type="text" placeholder="ID"><br><br>
				Doctor Name :<input name="name" type="text" placeholder="Name"><br><br>
				Department  :<input name="dept" type="text" placeholder="Department"><br><br>
				
				<input type="submit" name='submit' value="Submit">
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