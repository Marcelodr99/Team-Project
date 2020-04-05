<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carpet Cleaning</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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
                <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./register.html">Register</a></li>

            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div id="formContent">
            <div>
                <h1 class="padd"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</h1>
            </div>

            <form action = "login.php" method ="post">
			
                <input type="text" id="login" name="login" placeholder="Login" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="submit" value="Log In">
            </form>
            <div id="formFooter">
                <p>Don't yet have an account? <a class="underlineHover" href="register.html">Sign Up</a></p>
                <p><a class="underlineHover" href="#">Forgot Password?</a></p>
            </div>

        </div>
    </div>

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
$_SESSION['Error'] = "The e-mail address and password entered do not match our records. Perhaps you need to register, just click the Register button on the header menu";
$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$_SESSION['user_level'] = (int) $_SESSION['user_level'];

$url = ($_SESSION['user_level'] === 1) ? 'welcomeAdmin.php' : 'welcome.php';
  header('Location: ' . $url);
  
exit();
mysqli_free_result($result);
mysqli_close($dbcon);
} else { echo $_SESSION['Error'];
		unset($_SESSION['Error']);
		//header('refresh:1; url = login.php');
		//exit();
}

$conn->close();
 
?>
</body>
</html>