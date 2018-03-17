<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
	

<style>

table, th, td {
     border: 1px solid black;
	 height:40px;
	 width:900px;
	 text-align:center;
}
</style>
	<div style="margin:auto; align:center; background:#white; color:black; height:auto; width:900px; padding-top:20px; overflow:hidden; clear:both;">

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_patient";

// Create connection
		$conn =mysqli_connect('localhost', 'root', '', 'db_patient');
// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$res = mysqli_query($conn,"select *from tb_bill");
			$sqlbgroup ="SELECT id FROM tb_bill ";
	
			$sql = "SELECT *FROM tb_bill";
			$result = mysqli_query($conn, $sql);

			if(isset($_POST['submit']))
			{

				$search_item = $_POST['id'];

			
				$fetch_res = mysqli_query($conn,"select * from tb_bill where id ='$search_item' ");



				if (mysqli_num_rows($result) > 0 )
				{
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) 
					{
						$sqlid=$row["bill_no"];
						$bid=$_POST["id"];
		 
		 
						if ($sqlid == $bid)
						{
							echo "<h2 style='color:white;background:blue; text-align:center;'><td> Bill Number : " . $row['bill_no'] . " </h2>"; 
		
							echo '<h3 align="center" class="userbox"><table>';
							echo "<tr><th>Bill Number </th> <th>Date</th><th>Room charge</th><th>Pathology fees</th> <th>Doctor Fees</th> </tr>";
				
							echo "<tr><td> " . $row['bill_no'] . "</td>";
				
							echo "<td> " . $row['date'] . "</td>";
							echo "<td> " . $row['room_charge'] . "</td>";
							echo "<td> " . $row['pathology_fees'] . "</td>";
			   
							echo "<td> " . $row['doctor_fees'] . "</td></tr>";
			   
							
				

			
					 
					 
							echo '</table></h3>';
							
						}
						else if (empty($bid))
						{
						echo '<script type="text/javascript">
							window.location = "bill_search.php"
							</script>';
						}
					}

	
				} 
				else 
				{
				echo "0 results";
				}

			}

		mysqli_close($conn);
	
		?>
		<a class="btn btn-primary" href="search_form.php" type="button">Back</a>

	</div>						
   
 </body>
</html>

             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>		

           <div class="footer">
				<center><h3>&copy;Tanjina Jahan (G025621)</h3></center>
			</div>	
		</div>
	</div>
</body>
</html>