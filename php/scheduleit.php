<html>
<body>
<?php

// Create connection
require_once '../controllers/authController.php';

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$email2 = $_SESSION['email'];
$phone = $_POST["phone"];
$input_date = strtr($_POST["date"], '/','-');
$time = $_POST["time"];
$info = $_POST["info"];
$address = $_POST["address"];
$services = $_POST["services"] . $_POST["paymentOption"];
$date= date('Y-m-d', strtotime($input_date));
$id = $_SESSION['id'];

//inserts the the id from signup table to customer_id of schedule table if logged in.
if(isset($_SESSION['id'])){
	$sql = "INSERT INTO schedule (fname, lname, email, phone,  date, time, info, address, services, customer_id) 
	VALUES ('$fname', '$lname', '$email2', '$phone', '$date', '$time', '$info', '$address', '$services', '$id')";}
else{
	$sql = "INSERT INTO schedule (fname, lname, email, phone,  date, time, info, address, services) 
	VALUES ('$fname', '$lname', '$email', '$phone', '$date', '$time', '$info', '$address', '$services')";
	}
if ($conn->query($sql) === TRUE) {
 echo "Sent!";
 if(isset($_SESSION['id']))
    header("location: ./index.php");
else    
    header("location: ../index.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>