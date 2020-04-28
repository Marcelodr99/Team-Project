  
<?php
require_once '../controllers/authController.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

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
}
if(isset($_POST['edit'])){

	$str = $_POST['place'];

	$arr = explode(" ", $str);

	$selectID = "SELECT * FROM schedule WHERE FIND_IN_SET('last',lname)";
	$result = mysqli_query($conn, $selectID);
	$rs = mysqli_fetch_assoc($result);
	$sql = "UPDATE `schedule` SET `fname` = '$arr[0]', `lname` = '$arr[1]', `email` = '$arr[3]', `address` = '$arr[4]', `phone` = '$arr[2]', `date` = '$arr[7]', `time` = '$arr[8]', `info` = '$arr[5]', `services` = '$arr[6]' WHERE `schedule`.`id` =" . $rs[id] ."\n";
	mysqli_query($conn, $sql);

	header("refresh:1; url = admin.php");

}
	mysqli_close($conn)
?>