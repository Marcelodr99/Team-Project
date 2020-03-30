
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
        <a class="navbar-brand" href="./index.html"><img src="https://img.icons8.com/metro/26/000000/vacuum-cleaner.png"> | Rossi Carpet Cleaning</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="./about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="./gallery.html">Gallery</a></li>
            </ul>
            <ul class="navbar-nav form-inline my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="./login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./register.html">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="./admin.html">Admin</a></li>
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
<table>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Info</th>
<th>Date</th>
</tr>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "mysql", "project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, email, phone, info, date FROM schedule";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["phone"] . "</td><td>"
. $row["email"]. "</td><td>".$row["info"]. "</td><td>".$row["date"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table
	
</body>
</html>