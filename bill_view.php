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
	

	 $allData =mysqli_query($conn,'SELECT * FROM tb_bill') ;

	     echo "<table><tr><th>Bill Number</th><th>Date</th><th>Room charge</th><th>Pathology fees</th><th>Doctor Fees<th>Delete</th><th>Update</th><th>Report</th></tr>";
	   
	     while($tukra =mysqli_fetch_array($allData)) {
	         echo "<tr><td>". $tukra["bill_no"]."</td><td>". $tukra["date"]."</td><td>".$tukra["room_charge"]."</td><td>".$tukra["pathology_fees"]."</td><td>".$tukra["doctor_fees"]."</td><td><a href =bill_delete.php?id=".$tukra["bill_no"].">Delete</a></td><td><a href=bill_update.php?id=".$tukra["bill_no"].">Update</a></td><td><a href=bill_pdf.php?id=".$tukra["bill_no"].">pdf</a></td></tr>";
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