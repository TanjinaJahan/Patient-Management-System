<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
<?php
// require("db.php");
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tb_room WHERE r_no= '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
                        $fn1=$test['r_no'] ;
                        $fn2=$test['r_type'] ;
                        $fn3= $test['r_status'] ;                          
                       

				
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
<h2 style="color:black;background:blue; text-align:center;"><td> Room Information</h2>
<div style="overflow-x:auto;">
<table border="2" align="center" style="margin:30px;">
<tr><th>Room Number</th><th>Room Type</th><th>Room Status</th></tr>
	<tr>
		
		<td><?php echo $fn1 ?></td>
		<td><?php echo $fn2 ?></td>
		<td><?php echo $fn3 ?></td>
		
	
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
           
		
	</div>
</body>
</html>