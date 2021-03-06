<?php 
session_start();
require '../config/db.php';
require_once 'emailController.php';
$errors = array();
$username = "";
$email = "";

//this would be for register
if (isset($_POST['signup-btn'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	

	
	if(empty($username)) {
		$errors['username'] = "Username required";
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Email address is invalid";

	}
	
	if(empty($email)) {
		$errors['email'] = "Email required";
	}
	
	if(empty($password)) {
		$errors['password'] = "Password required";
	}
	
	if($password !== $passwordConf) {
		$errors['password'] = "Password do not match";
	}
	
	
	
	$emailQuery = "SELECT * FROM signup WHERE email=? LIMIT 1";
	$stmt = $conn->prepare($emailQuery);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result = $stmt->get_result();
	$userCount = $result->num_rows;
	$stmt->close();
	
	if($userCount > 0){
		$errors['email'] = "Email already exists";
	}
	
	if(count($errors) === 0){
		$password = password_hash($password, PASSWORD_DEFAULT);
		$token = bin2hex(random_bytes(50));
		$verified = false;
		
	$sql = "INSERT INTO signup (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ssdss', $username, $email, $verified, $token, $password);
	if($stmt->execute()){
	
		$user_id = $conn->insert_id;
		$_SESSION['id'] = $user_id;
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['verified'] = $verified;

		sendVerificationEmail($email, $token, $username);
		$_SESSION['message'] = "You are now registered!";
		$_SESSION['alert-class'] = "alert-success";
		header('Location: verify.php');
		exit();
	
	}else{
		$error['db_error'] = "Database error: failed to register";
	}
	
	}
	
	
 }
// if user clicks on the login button
 
if (isset($_POST['login-btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(empty($username)) {
		$errors['username'] = "Username Required";
	}
	
	if(empty($password)) {
		$errors['password'] = "Password required";
	}
	
	if (count($errors) === 0){
	$sql = "SELECT * FROM signup WHERE username =? OR email =? LIMIT 1";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ss', $username, $username);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_assoc();
	
	
	
	if (password_verify($password, $user['password'])) {
		$_SESSION['user_level'] = $user['user_level'];
		$url = 'index.php';
		
		$_SESSION['id'] = $user['id'];
		$_SESSION['username'] = $user['username'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['verified'] = $user['verified'];
		// set flash message
		$_SESSION['message'] = "You are now logged in!";
		$_SESSION['alert-class'] = "alert-success";
		
		
		header('Location: ' . $url);
		exit();	
		
	
	}else{
		$errors['login_fail'] = "Wrong Credentials";
	}
	
   } 
   
 }
    // logout user
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['verified']);
        header('location: login.php');
        exit();

    }

    // verify user by token
    function verifyUser($token)
    {
        global $conn;
        $sql = "SELECT * FROM signup WHERE token= '$token' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            $update_query = "UPDATE signup SET verified=1 WHERE token='$token'";

            if(mysqli_query($conn, $update_query)){
                // log user in
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = 1;
                // set flash message
                $_SESSION['message'] = "Your email address was successfully verified!";
                $_SESSION['alert-class'] = "alert-success";
                header('location: verify.php');
                exit();
            } else {
                echo 'User not found';
            }
        }

	}
	
		// if user clicks on the forgot password button
		if (isset($_POST['forgot-password'])) {
			$email = $_POST['email'];
	
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = "Email address is invalid";  
			}
		
			if (empty($email)) {
				$errors['email'] = "Email required";    
			}
	
			if(count($errors) == 0) {
				$sql = "SELECT * FROM signup WHERE email = '$email' LIMIT 1";
				$result = mysqli_query($conn, $sql);
				$user = mysqli_fetch_assoc($result);
				$token = $user['token'];
				$username = $user['username'];
				sendPasswordResetLink($email, $token, $username);
				header('location: passwordMessage.php');
				exit(0);
			}
	
		}
	
		// if user clicked on the reset password button
		if (isset($_POST['reset-password-btn'])) {
			$password = $_POST['password'];
			$passwordConf = $_POST['passwordConf'];
		
			if (empty($password) || empty($passwordConf)) {
				$errors['password'] = "Password required";    
			}
		
			if($password !== $passwordConf) {
				$errors['password'] = "The passwords do not match";
			}   
			
			$password = password_hash($password, PASSWORD_DEFAULT);
			$email = $_SESSION['email'];
	
			if (count($errors) == 0) {
				$sql = "UPDATE signup SET password= '$password' WHERE email ='$email'";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('location: login.php');
					exit(0);
	
				}
			}
		}
		
		function resetPassword($token)
		{
			global $conn;
			$sql = "SELECT * FROM signup WHERE token= '$token' LIMIT 1";
			$result = mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);
			$_SESSION['email'] = $user['email'];
			header('location: resetPassword.php');
			exit(0);
		}
		
 
   
	
