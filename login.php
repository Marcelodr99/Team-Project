<html>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "project";
$myusername = $_POST["login"];
$mypassword= $_POST["password"];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM signup WHERE username = '$myusername' and
password = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
 session_start();
$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$_SESSION['user_level'] = (int) $_SESSION['user_level'];

$url = ($_SESSION['user_level'] === 1) ? 'welcomeAdmin.php' : 'welcome.php';
 header('Location: ' . $url);

} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>