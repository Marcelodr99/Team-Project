<?php require_once 'controllers/authController.php';
if(!isset($_SESSION['id'])){
	header('location: login.php');
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carpet Cleaning</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./indexAdmin.php"><img src="https://img.icons8.com/metro/26/000000/vacuum-cleaner.png"> | Rossi Carpet Cleaning</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="./indexAdmin.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="./about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="./gallery.html">Gallery</a></li>
            </ul>
            <ul class="navbar-nav form-inline my-2 my-lg-0">
				
				<td class="nav-item">
				Welcome,
				<?php 
				session_start();
				echo $_SESSION['username'] ?></td>
				
                <li class="nav-item"><a class="nav-link" href="./admin.php">Admin</a></li>
				 <li class="nav-item"><a class="nav-link" href="indexAdmin.php?logout=1" class = "logout">logout</a></li>
            </ul>
        </div>
    </nav>

  
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: ;
font-family: "Poppins", sans-serif;
font-size: 15px;
text-align: center;
}
th {
background-color: #808080;
color: white;
}
tr:nth-child(even) {background-color: }
</style>
</head>
<body>
<table class="table table-striped">
<thead>
<tr>


<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">Phone</th>
<th scope="col">Email</th>
<th scope="col">Address</th>
<th scope="col">Info</th>
<th scope="col">Date</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>

<?php
$conn = mysqli_connect('127.0.0.1', 'root', 'mysql','project');

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM schedule ";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = mysqli_fetch_array($result)) { 
	echo "<tr scope='row'>";
	
	echo "<td>".$row['fname']."</td>";
	echo "<td>".$row['lname']."</td>";
	echo "<td>".$row['phone']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['info']."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";
	"</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
	</tbody>
</body>
</html>