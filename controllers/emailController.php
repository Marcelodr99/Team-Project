<?php

require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);



function sendVerificationEmail($userEmail, $token)
{
    global $mailer;

    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verify email</title>
        <style>
            .wrapper {
            padding: 20px;
            color: #444;
            font-size: 1.3em;
            }
            a {
            background: #592f80;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <p>Thank you for signing up on our site. Please click on the link below to verify your account:.</p>
<<<<<<< HEAD
            <a href="https://localhost/mysite/verify.php?token='  . $token . '">
=======
            <a href="http://localhost/Project2/verify.php?token='  . $token . '">
>>>>>>> cdc17fea2dda2cfd51587cf0b04a9d22af1823f9
                Verify your Email!
            </a>
        </div>
        
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('Verify your email address'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');
    ;

    // Send the message
    $result = $mailer->send($message);
}

function sendPasswordResetLink($userEmail, $token)
{
    global $mailer;

    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verify email</title>
        <style>
            .wrapper {
            padding: 20px;
            color: #444;
            font-size: 1.3em;
            }
            a {
            background: #000000;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <p> Hello,

                Click here to reset your password:
            </p>
            <a href="http://localhost/Project2/verify.php?password-token='  . $token . '"> 
                RESET PASSWORD
            </a>
        </div>
        
    </body>
    </html>';
    // Create a message
    $message = (new Swift_Message('Rossi Carpet Cleaning Password Reset'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');
    ;

    // Send the message
    $result = $mailer->send($message);
}
