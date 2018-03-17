<?php
$conn =new mysqli('localhost', 'root', '', 'db_patient');
$sql="DELETE FROM tb_room WHERE r_no='$_GET[id]'";
if(mysqli_query($conn,$sql))
     header("refresh:1;url=room_view.php");
else 
     echo"not deleted";
?>