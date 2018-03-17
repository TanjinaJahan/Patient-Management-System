<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
<?php
// require("db.php");
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tb_patient WHERE p_id= '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
                        $fn1=$test['p_id'] ;
                        $fn2=$test['p_name'] ;
                        $fn3= $test['p_age'] ;     
						$fn4= $test['p_gender'] ; 
						$fn5= $test['p_address'] ; 
						$fn6= $test['p_contact'] ; 
						$fn7= $test['admission_date'] ; 
						$fn8= $test['discharge_date'] ; 
						$fn9= $test['disease'] ; 
						
                       

				
mysqli_close($conn);
?>

<style>
table, th, td {
     border: 1px solid green;
	 height:40px;
	 width:850px;
	 text-align:center;
}
th {
    background-color:#FC3;
    color: black;
}
</style>


<div id="printableArea">
<h2 style="color:black;background:blue; text-align:center;"><td> Patient Information</h2>
<div style="overflow-x:auto;">
<table border="2" align="center" style="margin:30px;">
<tr><th>Patient ID</th><th>Patient Name</th><th>Age </th><th>Gender  </th><th>Address </th><th>Contact Number </th><th>Admission Date </th><th>Discharge Date</th><th>Disease  </th></tr>
	<tr>
		
		<td><?php echo $fn1 ?></td>
		<td><?php echo $fn2 ?></td>
		<td><?php echo $fn3 ?></td>
		<td><?php echo $fn4 ?></td>
		<td><?php echo $fn5 ?></td>
		<td><?php echo $fn6 ?></td>
		<td><?php echo $fn7 ?></td>
		<td><?php echo $fn8 ?></td>
		<td><?php echo $fn9 ?></td>
		
		
	
	</tr>
		
</table>
</div>
			<div class="footer">
				<center><h3>&copy;Tanjina Jahan (G025621)</h3></center>
			</div>	
</div>
<br><h3 align="center">Print the page </h3><center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>
<br>
<br>
<br>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
            
		
	

