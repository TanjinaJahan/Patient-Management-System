<?php  require_once('header.php');  ?> 
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php');  ?> 

             
             	

<style>
table, th, td {
     border: 1px solid black;
	 border-collapse:collapse;
     text-align: center;
     margin: auto;
     width: 860px;
}
</style>


<?php

	$conn =new mysqli('localhost', 'root', '', 'db_patient');
	

	 $allData =mysqli_query($conn,'SELECT * FROM tb_patient') ;

	     echo "<table>
		 <tr><th>Patient ID</th><th>Patient Name</th><th>Age</th><th>Gender</th><th>Address</th><th>Contact Number</th><th>Admission Date</th><th>Discharge Date</th><th>Disease</th><th>Delete</th><th>Update</th><th>Report</th></tr>";
	   
	     while($tukra =mysqli_fetch_array($allData)) {
	         echo "<tr><td>". $tukra["p_id"]."</td><td>". $tukra["p_name"]."</td><td>".$tukra["p_age"]."</td><td>". $tukra["p_gender"]."</td><td>". $tukra["p_address"]."</td><td>". $tukra["p_contact"]."</td><td>". $tukra["admission_date"]."</td><td>". $tukra["discharge_date"]."</td><td>". $tukra["disease"]."</td><td><a href =patient_delete.php?id=".$tukra["p_id"].">Delete</a></td><td><a href=patient_update.php?id=".$tukra["p_id"].">Update</a></td><td><a href=patient_pdf.php?id=".$tukra["p_id"].">pdf</a></td></tr>";
	     }
	     echo "</table>";
	$conn->close();
?>  

			<br>	
        
           		
<div class="footer">
				<center><h3>&copy;Tanjina Jahan (G025621)</h3></center>
			</div>	
			
		</div>
	</div>
</body>
</html>