<?php
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$sql="DELETE FROM tb_doctor WHERE d_id='$_GET[id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=doctor_view.php");
else 
     echo"not deleted";
?>