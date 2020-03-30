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
$uname = $_POST["user"];
$passwd = $_POST["password"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$sql = "INSERT INTO signup (firstname, lastname, email, username,
password) VALUES ('$fname', '$lname', '$email', '$uname', '$passwd')";
if ($conn->query($sql) === TRUE) {
 echo "Sign up successfully!";
 header("location: login.html");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>