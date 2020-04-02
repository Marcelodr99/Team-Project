<?php
$conn = mysqli_connect('127.0.0.1','root','mysql','project');
$id=$_GET['id'];
$sql = "DELETE FROM schedule WHERE id=$id"; 
if(mysqli_query($conn,$sql))
		header("refresh:1; url = admin.php");
	else
		echo "Not Deleted";
?>
