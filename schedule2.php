<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carpet Cleaning</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./register.html">Register</a></li>

            </ul>
        </div>
    </nav>
    <form name="qryform" id="qryform" method="post" action="schedule.php" onsubmit="return(validate());" novalidate="novalidate">
        <div class="container">
            <div class="form-row">

                <div class="col form-sec">
                    <h4>Contact form</h4>


                    

                    <div class="form-group">
                        <label>Phone No.:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="Date" name="date">
                    </div>

                    <div class="form-group">
                        <label>Info:</label>
                        <textarea name="info" class="form-control" id="info" placeholder="Enter additional information."></textarea>
                    </div>
                </div>

                <div class="col form-sec">
                    <h4>Services</h4>

                    <div class="card">

                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            Carpet Cleaning <i class="fa fa-chevron-down rotate-icon" aria-hidden="true"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Clean</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Rooms</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subCR()">-</button> <label id="cleanRoom">0</label> <button type="button" class="btn btn-secondary" onclick="addCR()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bath/Laundry</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subCB()">-</button> <label id="cleanBath">0</label> <button type="button" class="btn btn-secondary" onclick="addCB()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Entry/Hall</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subCE()">-</button> <label id="cleanEntry">0</label> <button type="button" class="btn btn-secondary" onclick="addCE()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Staircase</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subCS()">-</button> <label id="cleanStair">0</label> <button type="button" class="btn btn-secondary" onclick="addCS()">+</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne2">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                        <h5 class="mb-0">
                                            Upholstery Cleaning <i class="fa fa-chevron-down rotate-icon" aria-hidden="true"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne2" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Clean</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Sofa</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subS()">-</button> <label id="upSofa">0</label> <button type="button" class="btn btn-secondary" onclick="addS()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Sectional</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subSe()">-</button> <label id="upSectional">0</label> <button type="button" class="btn btn-secondary" onclick="addSe()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chair</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subC()">-</button> <label id="upChair">0</label> <button type="button" class="btn btn-secondary" onclick="addC()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ottoman</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subO()">-</button> <label id="upOttoman">0</label> <button type="button" class="btn btn-secondary" onclick="addO()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dining Room Chair</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subDR()">-</button> <label id="upDining">0</label> <button type="button" class="btn btn-secondary" onclick="addDR()">+</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne3">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                        <h5 class="mb-0">
                                            Tile & Grout Floor Cleaning <i class="fa fa-chevron-down rotate-icon" aria-hidden="true"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3" data-parent="#accordionEx">
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Clean</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Rooms</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subTR()">-</button> <label id="tileRoom">0</label> <button type="button" class="btn btn-secondary" onclick="addTR()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bath/Laundry</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subTB()">-</button> <label id="tileBath">0</label> <button type="button" class="btn btn-secondary" onclick="addTB()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Entry/Hall</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subTE()">-</button> <label id="tileEntry">0</label> <button type="button" class="btn btn-secondary" onclick="addTE()">+</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Staircase</th>
                                                    <td><button type="button" class="btn btn-secondary" onclick="subTS()">-</button> <label id="tileStair">0</label> <button type="button" class="btn btn-secondary" onclick="addTS()">+</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col form-sec ml-3">
                    <h2>Your Estimated Quote</h2>


                    <div class="form-group mt-5">
                        <h3>Estimated Total:
                            <label>$ </label>
                            <label id="total">0</label>
                        </h3>

                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>




    <script src="./schedule.js"></script>




<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


$phone = $_POST["phone"];
$info = $_POST["info"];
$input_date = strtr($_POST["date"], '/','-');
$date= date('Y-m-d', strtotime($input_date));


$sql = "INSERT INTO schedule (phone, date, info) 
VALUES ('$phone', '$date', '$info')";
if ($conn->query($sql) === TRUE) {
 echo "Sent!";
 header("location: welcome.php");
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>