<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
<?php
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tb_doctor WHERE d_id='$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
            {
            die("Error: Data not found..");
            }
                        $fn1=$test['d_id'] ;
                        $fn2=$test['d_name'] ;
                        $fn3= $test['dept'];                          
                        
                        // $contact=$test['contact'] ;

if(isset($_POST['save']))
{     
      $fn4 = $_POST['id'];
      $fn5 = $_POST['name'];
      $fn6 = $_POST['dept'];
      

      $conn =new mysqli('localhost', 'root', '', 'db_patient');

      mysqli_query($conn,"UPDATE tb_doctor SET d_id='$fn4', d_name ='$fn5',dept ='$fn6' WHERE d_id = '$id'")
                        or die(mysqli_error()); 
      echo "Saved!";
      
      header("Location: doctor_view.php");                 
}
mysqli_close($conn);
?>

<title>OVERVIEW</title>

<div class="UpdateForm">
<form method="post">
<table>
      <tr>
            <th>Doctor ID:</th>
            <td><input type="digits" name="id" value="<?php echo $fn1 ?>"/></td>
      </tr>
      <tr>
            <th>Doctor Name:</th>
            <td><input type="text" name="name" value="<?php echo $fn2 ?>"/></td>
      </tr>
      <tr>
            <th>Department:</th>
            <td><input type="text" name="dept" value="<?php echo $fn3 ?>"/></td>
      </tr>
      
      <tr>
      <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
      </tr>
</table>
</form>
</div>
<button id="mybtnnn" type="button" onclick="location.href='http://localhost/patient/doctor_view.php'">Back</button>
 
            
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