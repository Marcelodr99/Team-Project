  
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
	$sql .= "\n" . 'INSERT INTO schedule (fname, lname, phone, email, address, info, services, date, time) VALUES ("';
	$sql .= implode('","', $arr);
	$sql .='")' ."\n";

	

	// ***** BUG ******
	// It adds the edited appointment but does not delete previous
	// ***** BUG ******
	$dd = $_POST['checkbox'];
	foreach($dd as $id){
		$sql .= "DELETE FROM schedule WHERE id=".$id . "\n";
	}
	if ($conn->multi_query($sql) === TRUE) {
    	echo "Table row copied successfully. Do something with it";
	}
	else{
		echo "Error DELETE: " . mysqli_error($conn);
	}
	
	header("refresh:2; url = admin.php");

}
	mysqli_close($conn)
?>