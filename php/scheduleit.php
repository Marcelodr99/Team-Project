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
$address = $_POST["address"];
$phone = $_POST["phone"];
$info = $_POST["info"];
$input_date = strtr($_POST["date"], '/','-');
$date= date('Y-m-d', strtotime($input_date));


$sql = "INSERT INTO schedule (fname, lname, email, address, phone, date, info) 
VALUES ('$fname', '$lname', '$email', '$address', '$phone', '$date', '$info')";
if ($conn->query($sql) === TRUE) {
 echo "Sent!";
 header("location: ../index.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>