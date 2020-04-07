<?php require_once 'controllers/authController.php'; ?>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <!-- Bootsrap 4 CSS-->
    <title>Reset Password</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
 
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
            <form action="resetPassword.php" method ="post">
                <h3 class="text-center">Reset your password</h3>

                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>     

               <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="passwordConf">Confirm Password</label>
                    <input type="password" name="passwordConf" class="form-control form-control-lg">
                </div>                  
                <div class="form-group">
                    <button type="submit" name="reset-password-btn" class ="btn btn-primary btn-block btn-lg">Reset Password</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>