<html>
<body>
<?php
$servername = "127.0.0.1";
$username = "mysql";
$password = "mysql";
$dbname = "project2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$info = $_POST["info"];
$input_date = strtr($_POST["date"], '/','-');
$date= date('Y-m-d', strtotime($input_date));


$sql = "INSERT INTO schedule (name, email, phone, date, info) 
VALUES ('$name', '$email', '$phone', '$date', '$info')";
if ($conn->query($sql) === TRUE) {
 echo "Sent!";
 header("location: admin.php");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>