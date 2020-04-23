<?php

// Create connection
require_once '../controllers/authController.php';

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT fname, date, time FROM schedule';

$result = $conn->query($sql);
$data = array();
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

$conn->close();
echo json_encode($data);
?>