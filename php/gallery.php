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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.php"><img src="https://img.icons8.com/metro/26/000000/vacuum-cleaner.png"> | Rossi Carpet Cleaning</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="./gallery.php">Gallery</a></li>
            </ul>
            <ul class="navbar-nav form-inline my-2 my-lg-0">
				
				
				<td class="nav-item">
				Welcome,
				<?php echo $_SESSION['username'] ?></td>
                <li class="nav-item"><a class="nav-link" href="userView.php">View Appointment</a></li>
				<?php if ($_SESSION['user_level'] == 1){
                    print("<li class='nav-item'><a class='nav-link' href='./admin.php'>Admin</a></li>");
                }?>
                <li class="nav-item"><a class="nav-link" href="index.php?logout=1" class = "logout">logout</a></li>
				

            </ul>
        </div>
    </nav>

    <div class="container-full-bg p-5">

        <h1 class="font-weight-light text-center mt-4 mb-0">Gallery</h1>

        <hr class="mt-2 mb-5">

        <div id="c" class="row text-center text-lg-left">

            <div class="col-lg-4 col-sm-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Carpet_Cleaning_Tulsa.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://live.staticflickr.com/5211/5729073512_8306539af2_b.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://cdn.pixabay.com/photo/2016/08/19/11/37/vacuum-cleaner-1605068_960_720.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Carpet_cleaning_brisbane.jpg" alt="">
                </a>
            </div>
        </div>

    </div>


    <script src="../js/gallery.js"></script>
    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Carpet_Cleaning_Tulsa.jpg" alt="">
    <img src="https://live.staticflickr.com/5211/5729073512_8306539af2_b.jpg" alt="">
    <img src="https://cdn.pixabay.com/photo/2016/08/19/11/37/vacuum-cleaner-1605068_960_720.jpg" alt="">
    <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Carpet_cleaning_brisbane.jpg" alt=""> -->

</body>

</html>