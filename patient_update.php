<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
<?php
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tb_patient WHERE p_id='$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
            {
            die("Error: Data not found..");
            }
                        $fn1=$test['p_id'] ;
                        $fn2=$test['p_name'] ;
                        $fn3= $test['p_age'];   
						$fn4= $test['p_gender'];
						$fn5= $test['p_address'];
						$fn6= $test['p_contact'];
						$fn7= $test['admission_date'];
						$fn8= $test['discharge_date'];
						$fn9= $test['disease'];
						
                        
                        // $contact=$test['contact'] ;

if(isset($_POST['save']))
{     
		$fn10 = $_POST['id'];
		$fn11 = $_POST['name'];
		$fn12 = $_POST['age'];
		$fn13 = $_POST['gender'];
		$fn14 = $_POST['address'];
		$fn15 = $_POST['number'];
		$fn16 = $_POST['admission'];
		$fn17 = $_POST['discharge'];
		$fn18 = $_POST['disease'];
		
      

      $conn =new mysqli('localhost', 'root', '', 'db_patient');

      mysqli_query($conn,"UPDATE tb_patient SET p_id='$fn10', p_name ='$fn11',p_age ='$fn12', p_gender ='$fn13', p_address ='$fn14', p_contact ='$fn15',admission_date ='$fn16', discharge_date ='$fn17', disease ='$fn18' WHERE p_id = '$id'")
                        or die(mysqli_error()); 
      echo "Saved!";
      
      header("Location: patient_view.php");                 
}
mysqli_close($conn);
?>

<title>OVERVIEW</title>

<div class="UpdateForm">
<form method="post">
<table>
      <tr>
            <th> Patient ID:</th>
            <td><input type="digits" name="id" value="<?php echo $fn1 ?>"/></td>
      </tr>
      <tr>
            <th>Patient Name:</th>
            <td><input type="text" name="name" value="<?php echo $fn2 ?>"/></td>
      </tr>
      <tr>
            <th>Age:</th>
            <td><input type="text" name="age" value="<?php echo $fn3 ?>"/></td>
      </tr>
	  <tr>
            <th>Gender:</th>
            <td><input type="text" name="gender" value="<?php echo $fn4 ?>"/></td>
      </tr>
	  <tr>
            <th>Address:</th>
            <td><input type="text" name="address" value="<?php echo $fn5 ?>"/></td>
      </tr>
	  <tr>
            <th>Contact Number:</th>
            <td><input type="text" name="number" value="<?php echo $fn6 ?>"/></td>
      </tr>
	  <tr>
            <th>Admission Date:</th>
            <td><input type="text" name="admission" value="<?php echo $fn7 ?>"/></td>
      </tr>
	  <tr>
            <th>Discharge Date:</th>
            <td><input type="text" name="discharge" value="<?php echo $fn8 ?>"/></td>
      </tr>
	  <tr>
            <th>Disease:</th>
            <td><input type="text" name="disease" value="<?php echo $fn9 ?>"/></td>
      </tr>
	  
      
      <tr>
      <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
      </tr>
</table>
</form>
</div>
<button id="mybtnnn" type="button" onclick="location.href='http://localhost/Patient/patient_view.php'">Back</button>
 
            
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