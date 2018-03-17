<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
<?php
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tb_room WHERE r_no='$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
            {
            die("Error: Data not found..");
            }
                        $fn1=$test['r_no'] ;
                        $fn2=$test['r_type'] ;
                        $fn3= $test['r_status'];                          
                        
                        // $contact=$test['contact'] ;

if(isset($_POST['save']))
{     
      $fn4 = $_POST['number'];
      $fn5 = $_POST['type'];
      $fn6 = $_POST['status'];
      

      $conn =new mysqli('localhost', 'root', '', 'db_patient');

      mysqli_query($conn,"UPDATE tb_room SET r_no='$fn4', r_type ='$fn5',r_status ='$fn6' WHERE r_no = '$id'")
                        or die(mysqli_error()); 
      echo "Saved!";
      
      header("Location: room_view.php");                 
}
mysqli_close($conn);
?>

<title>OVERVIEW</title>

<div class="UpdateForm">
<form method="post">
<table>
      <tr>
            <th> Room Number:</th>
            <td><input type="digits" name="number" value="<?php echo $fn1 ?>"/></td>
      </tr>
      <tr>
            <th>Room Type:</th>
            <td><input type="text" name="type" value="<?php echo $fn2 ?>"/></td>
      </tr>
      <tr>
            <th>Room Status:</th>
            <td><input type="text" name="status" value="<?php echo $fn3 ?>"/></td>
      </tr>
      
      <tr>
      <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
      </tr>
</table>
</form>
</div>
<button id="mybtnnn" type="button" onclick="location.href='http://localhost/Patient/room_view.php'">Back</button>
 
            
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