<?php require_once '../controllers/authController.php';
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
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="./index.php"><img src="https://img.icons8.com/metro/26/000000/vacuum-cleaner.png"> | Rossi Carpet Cleaning</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a></li>
				<li class="nav-item"><a class="nav-link" href="../about.html">About</a></li>
				<li class="nav-item"><a class="nav-link" href="../gallery.html">Gallery</a></li>
			</ul>
			<ul class="navbar-nav form-inline my-2 my-lg-0">
				
				<td class="nav-item">
					Welcome,
					<?php 
					session_start();
					echo $_SESSION['username'] ?></td>
					

					<li class="nav-item"><a class="nav-link" href="index.php?logout=1" class = "logout">logout</a></li>
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
					font-size: 16px;
					text-align: center;
				}
				th {
					background-color: #808080;
					color: white;
				}
				.asd{
					background-color:white;
				}
				tr:nth-child(even) {background-color:  }

				.delete {
					webkit-border-radius: 30px;
					-moz-border-radius: 30px;
					border-radius: 30px;
					background-color: #808080;
					font: #939595;
					color: white
				}

				.customCheckBox[type="checkbox"]:after{
					position: relative;
					display: block;
					left: 2px;
					top: -11px;
					width: 7px;
					height: 7px;
					border-width: 1px;
					border-style: solid;
					border-color: #B3B3B3 #dcddde #dcddde #B3B3B3;
					content: "";
					background-repeat: no-repeat;
					background-position:center;
				}

				.customCheckBox[type="checkbox"]:before{
					border: 1px solid #808080;
					content: "";
					background: #FFF;
					position: relative;
					display: block;
					width: 11px;
					height: 11px;

				}
				.customCheckBox[type="checkbox"]:checked:after{
					background-image:  url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAQAAABuW59YAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAB2SURBVHjaAGkAlv8A3QDyAP0A/QD+Dam3W+kCAAD8APYAAgTVZaZCGwwA5wr0AvcA+Dh+7UX/x24AqK3Wg/8nt6w4/5q71wAAVP9g/7rTXf9n/+9N+AAAtpJa/zf/S//DhP8H/wAA4gzWj2P4lsf0JP0A/wADAHB0Ngka6UmKAAAAAElFTkSuQmCC');
				}
				/* Large checkboxes */
				.customCheckBox.large{
					height:22px;
					width: 22px;
				}

				.customCheckBox.large[type="checkbox"]:before{
					width: 20px;
					height: 20px;
				}
				.customCheckBox.large[type="checkbox"]:after{
					top: -20px;
					width: 16px;
					height: 16px;
				}

			</style>
		</head>
		<body>
				<h4>How to use edit: 1) Click the checkbox of row you want to edit. 2) Edit cell. 3) Uncheck box of edited row. 4) Hit Edit Records // It's still buggy, msg for bug details//</h4>
			<form method ="post" action="delete.php">
			<input type="text" class="form-control" id="place" value="" placeholder="place" name="place" autocomplete="off" hidden="true">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">First Name</th>
							<th scope="col">Last Name</th>
							<th scope="col">Phone</th>
							<th scope="col">Email</th>
							<th scope="col">Address</th>
							<th scope="col">Info</th>
							<th scope="col">Services</th>
							<th scope="col">Date</th>
							<th scope="col">Time</th>
			
						</tr>
					</thead>
					<tbody>


						<?php
						$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT * FROM schedule where customer_id='{$_SESSION['id']}'";
						$result = mysqli_query($conn,$sql);
						
						if ($result->num_rows > 0) {
// output data of each row
							$i = 1;
							while($row = mysqli_fetch_array($result)) { 
								echo "<tr>";
								
								echo "<td id='fst'>".$row['fname']."</td>";
								echo "<td id='lst'>".$row['lname']."</td>";
								echo "<td id='phne'>".$row['phone']."</td>";
								echo "<td id='em'>".$row['email']."</td>";
								echo "<td id='addr'>".$row['address']."</td>";
								echo "<td id='inf'>".$row['info']."</td>";
								echo "<td id='serv'>".$row['services']."</td>";
								echo "<td id='dat'>".$row['date']."</td>";
								echo "<td id='tim'>".$row['time']."</td>";
								//echo "<td><input type = 'checkbox' onclick='exec(this)' class = 'customCheckBox large' id='checkbox[]".$i."' name = 'checkbox[]' value = '".$row['id']."'></td>";
								"</tr>";
								$i++;
							}
							echo "</table>";
						} else { echo "0 results"; }
						$conn->close();
						?>
				
						
					</tbody>
				</form>

				<script type="text/javascript" src="../js/admin.js"></script>
			</body>
			</html>