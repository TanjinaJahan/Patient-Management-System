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


<?php

	$conn =new mysqli('localhost', 'root', '', 'db_patient');
	

	 $allData =mysqli_query($conn,'SELECT * FROM tb_doctor') ;

	     echo "<table><tr><th>Doctor ID</th><th>Doctor Name</th><th>Department</th><th>Delete</th><th>Update</th><th>Report</th></tr>";
	   
	     while($tukra =mysqli_fetch_array($allData)) {
	         echo "<tr><td>". $tukra["d_id"]."</td><td>". $tukra["d_name"]."</td><td>".$tukra["dept"]."</td><td><a href =doctor_delete.php?id=".$tukra["d_id"].">Delete</a></td><td><a href=doctor_update.php?id=".$tukra["d_id"].">Update</a></td><td><a href=doctor_pdf.php?id=".$tukra["d_id"].">pdf</a></td></tr>";
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