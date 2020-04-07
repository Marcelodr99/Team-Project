<?php
$conn = mysqli_connect('127.0.0.1','root','mysql','project');
//$id=$_GET['id'];
if(!$conn) {
	die("connection Failed;" .mysqli_connect_error());
}
 
if(isset($_POST['delete'])){
	$dd = $_POST['checkbox'];
	foreach($dd as $id){
	$sql = "DELETE FROM schedule WHERE id=".$id;
		mysqli_query($conn, $sql);
		}
		header("refresh:1; url = admin.php");
		//header("location: admin.php");
	}
	mysqli_close($conn)
?>
