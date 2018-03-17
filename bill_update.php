<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
<?php
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tb_bill WHERE bill_no='$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
            {
            die("Error: Data not found..");
            }
                        $fn1=$test['bill_no'] ;
                        $fn2=$test['date'] ;
                        $fn3= $test['room_charge'];
						$fn4= $test['pathology_fees'];
						$fn5= $test['doctor_fees'];
                        
                        // $contact=$test['contact'] ;

if(isset($_POST['save']))
{     
      $fn6 = $_POST['number'];
      $fn7 = $_POST['date'];
      $fn8 = $_POST['charge'];
	  $fn9 = $_POST['pathology'];
	  $fn10 = $_POST['doctor'];
      

      $conn =new mysqli('localhost', 'root', '', 'db_patient');

      mysqli_query($conn,"UPDATE tb_bill SET bill_no='$fn6', date ='$fn7',room_charge ='$fn8',pathology_fees ='$fn9',doctor_fees ='$fn10' WHERE bill_no = '$id'")
                        or die(mysqli_error()); 
      echo "Saved!";
      
      header("Location: bill_view.php");                 
}
mysqli_close($conn);
?>

<title>OVERVIEW</title>

<div class="UpdateForm">
<form method="post">
<table>
      <tr>
            <th> Bill Number:</th>
            <td><input type="digits" name="number" value="<?php echo $fn1 ?>"/></td>
      </tr>
      <tr>
            <th>Date:</th>
            <td><input type="text" name="date" value="<?php echo $fn2 ?>"/></td>
      </tr>
      <tr>
            <th>Room charge:</th>
            <td><input type="text" name="charge" value="<?php echo $fn3 ?>"/></td>
      </tr>
	  <tr>
            <th> Pathology fees:</th>
            <td><input type="digits" name="pathology" value="<?php echo $fn4 ?>"/></td>
      </tr>
	  <tr>
            <th> Doctor Fees:</th>
            <td><input type="digits" name="doctor" value="<?php echo $fn5 ?>"/></td>
      </tr>
      
      <tr>
      <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
      </tr>
</table>
</form>
</div>
<button id="mybtnnn" type="button" onclick="location.href='http://localhost/patient/bill_view.php'">Back</button>
 
            
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