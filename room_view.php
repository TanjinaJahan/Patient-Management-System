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
	

	 $allData =mysqli_query($conn,'SELECT * FROM tb_room') ;

	     echo "<table><tr><th>Room Number</th><th>Room Type</th><th>Room Status</th><th>Delete</th><th>Update</th><th>Report</th></tr>";
	   
	     while($tukra =mysqli_fetch_array($allData)) {
	         echo "<tr><td>". $tukra["r_no"]."</td><td>". $tukra["r_type"]."</td><td>".$tukra["r_status"]."</td><td><a href =room_delete.php?id=".$tukra["r_no"].">Delete</a></td><td><a href=room_update.php?id=".$tukra["r_no"].">Update</a></td><td><a href=room_pdf.php?id=".$tukra["r_no"].">pdf</a></td></tr>";
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