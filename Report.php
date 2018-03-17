<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>

            	
             	

<style>
table, th, td {
     border: 1px solid black;
	 border-collapse:collapse;
     text-align: center;
     margin: auto;
     width: 860px;
}
</style>
	<div >
		
		<center><h1>Hello!Search By Id For Discharge Summary.</h1></center>
		<form action="" method="post">

		   <p align="center"> 
				Patient ID :<input name="id" type="text" placeholder="Patient ID">
				<input type="submit" name='submit' value="Search"><br><br>
				
			</p>
		</form>		
		
			
				
				<center><h2><?php if(isset($success)){ echo $success; }  ?></h2></center>
					
	</div>	


	<?php
			$conn =new mysqli('localhost', 'root', '', 'db_patient');

			if(isset($_POST['submit'])){

				$id =$_REQUEST['id'];

			$result = mysqli_query($conn,"SELECT * FROM tb_patient  WHERE p_id='$id'");
			$test = mysqli_fetch_array($result);

			$result2 = mysqli_query($conn,"SELECT * FROM tb_doctor  WHERE d_id='$id'");
			$test2 = mysqli_fetch_array($result2);

			$result3 = mysqli_query($conn,"SELECT * FROM tb_room  WHERE r_no='$id'");
			$test3 = mysqli_fetch_array($result3);

			$result4 = mysqli_query($conn,"SELECT * FROM tb_bill WHERE bill_no='$id'");
			$test4 = mysqli_fetch_array($result4);



	?>

<div id="printableArea">
						<h3>IBN SINA DIAGONISTIC & CONSULTATION CENTER</h3>	
			<div class="table">
				
<!-- 					<h2 align="center"> Patient Discharge </h2>
					<table border="1" align="center"> -->


									<div class="bill_box">	
										<div class="client">
											
											
											<label for="">Patient ID :</label><?php echo $test['p_id'] ; ?><br><br>
											<label for="">Patient Name :</label><?php echo $test['p_name'] ; ?>
											<label for="">Age :</label><?php echo $test['p_age'] ; ?>
											<label for="">Gender :</label><?php echo $test['p_gender'] ; ?>
											<label for="">Patient Address :</label><?php echo $test['p_address'] ; ?><br><br>
											<label for="">Patient Contact :</label><?php echo $test['p_contact'] ; ?>
											<label for="">Date of Admission :</label><?php echo $test['admission_date'] ; ?>
											<label for="">Date of Discharge :</label><?php echo $test['discharge_date'] ; ?><br><br>
											<label for="">Disease :</label><?php echo $test['disease'] ; ?>
											<label for="">Doctor Name :</label><?php echo $test2['d_name'] ; ?>
											<label for="">Room Number :</label><?php echo $test3['r_no'] ; ?>
											<label for="">Room Type :</label><?php echo $test3['r_type'] ; ?>
											
											<br><br>
									</div>
									<div class="bill">
									<br><br><br>
										<table>
											<tr>
												<th>SL</th>
												<th>Description</th>
												<th>Taka</th>
												
											</tr>
											<tr>
												<td>1.</td>
												<td>Room Charge</td>
												<td><?php echo  $test4['room_charge'] ; ?></td>

											</tr>
											<tr>
												<td>2.</td>
												<td>Pathology Fees</td>
												<td><?php echo  $test4['pathology_fees'] ; ?></td>
											</tr>
											<tr>
												<td>3.</td>
												<td>Doctor Fees</td>
												<td><?php echo  $test4['doctor_fees'] ; ?></td>
											</tr>
											<tr>
												<td>4.</td>
												<td>Total</td>
												<td>TK-<?php echo  $test4['doctor_fees'] + $test4['pathology_fees'] + $test4['room_charge']  ; ?></td>
											</tr>
										</table>
									</div>
									<div class="sign">
										<div class="emp_sign">
											    <h4>Employee :</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
										<div class="client_sign">
											    <h4>Patient Party:</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
									</div>

							    
<!-- 				</table> -->
				<br>
				</div>
</div>	


		<div class="footer">
				<center><h3>&copy;Tanjina Jahan (G025621)</h3></center>
		</div> 
		
</div>


			<?php

			}

			?>


	
					                    <center><input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print" /></center>




										<script>
										function printDiv(divName) {
										    var printContents = document.getElementById(divName).innerHTML;
										    var originalContents = document.body.innerHTML;
										    document.body.innerHTML = printContents;
										    window.print();
										    document.body.innerHTML = originalContents;
										}</script>

										    