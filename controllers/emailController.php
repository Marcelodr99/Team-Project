<?php

require_once '../vendor/autoload.php';
require_once '../config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);



function sendVerificationEmail($userEmail, $token, $userName)
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
            <p>Hello '. $userName . ',<br>
            Thank you for signing up on our site. Please click on the link below to verify your account:.</p>
            <a href="https://localhost/mysite/php/verify.php?token='  . $token . '">
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

function sendPasswordResetLink($userEmail, $token, $userName)
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
            <p>Hello '. $userName . ',<br>

                Click here to reset your password:
            </p>
            <a href="http://localhost/mysite/php/verify.php?password-token='  . $token . '"> 
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
function sendScheduleLink($userEmail, $userName, $date, $time)
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
            <p> Hello '. $userName .',<br>
            

                You are scheduled for an appointment on '. $date . ' at '. $time .  '
            </p>            

        </div>
        
    </body>
    </html>';
    // Create a message
    $message = (new Swift_Message('Rossi Carpet Cleaning Appointment'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');
    ;

    // Send the message
    $result = $mailer->send($message);
}

