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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/calendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
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
                <li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="./gallery.php">Gallery</a></li>
            </ul>
            <ul class="navbar-nav form-inline my-2 my-lg-0">
				
				
				<td class="nav-item">
				Welcome,
				<?php echo $_SESSION['username'] ?></td>

                <?php if ($_SESSION['user_level'] == 1){
                    print("<li class='nav-item'><a class='nav-link' href='./admin.php'>Admin</a></li>");
                }?>
				
                <li class="nav-item"><a class="nav-link" href="index.php?logout=1" class = "logout">logout</a></li>
				

            </ul>
        </div>
    </nav>
    <form name="qryform" id="qryform" method="post" action="./php/scheduleit.php">
        <div class="wrapper m-5">
            <div class="row">

                <div class="col-lg-5 col-md-10 col-sm-12">
                    <h4>Contact form</h4>


                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
                    </div>

                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                    </div>

                    <div class="form-group">
                        <label>Phone No.:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone" required>
                    </div>

                    <div class="form-group">
                        <label>Info:</label>
                        <textarea name="info" class="form-control" id="info" placeholder="Enter additional information." required></textarea>
                    </div>
                </div>

                <div class="col-lg-4 col-md-10 col-sm-12">
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
                <div class="col-lg-3 col-md-10 col-sm-12">
                    <h2>Your Estimated Quote:</h2>
                    <p id="disp"></p>

                    <input type="hidden" value="hidden" id="services" name="services">

                    <div class="mt-5">
                        <h2>Estimated Total:
                            <label>$ </label>
                            <label id="total">0</label>
                        </h2>

                    </div>
                </div>
            </div>

           
            <div class="text-center">
                <input id="btnShowDate" type="button" class="btn btn-primary" onclick="showCalendar()" value="Select Date">
            </div>

            <div hidden id="conDate" class="container">
                <h3 class="text-center">Select Desired Date & Time</h3>
                <div class="row justify-content-md-center">
                    <div id="calendar"></div>
                </div>
                <div class="row justify-content-md-end form-group mt-3">
                    <div class="form-group">
                        <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="form-group">
                            <div class="input-group date asd" id="datetimepicker3" data-target-input="nearest">
                                <input id="time" name="time" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker3').datetimepicker({
                                format: 'LT'
                            });
                        });
                    </script>
                </div>
                
                <div class="text-center">
                    <input id="btnSubmit" type="hidden" class="btn btn-primary" value="Submit">
                </div>
            </div>


            
            

            
    </form>




    <script type="text/javascript" src="../js/schedule.js"></script>
    <script type="text/javascript" src="../js/calendar.js"></script>
    <script type="text/javascript" src="../js/startCalendar.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
</body>

</html>