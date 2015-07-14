<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 12/21/14
 * Time: 06:43 PM
 */

require_once "../php/init.php";

if (isset($_POST['Submit'])){

    //connect to mysql
    $conn = mysqli_connect($server, $mysql_user, $mysql_pass);  //Set variables in /php/variables.php

    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    //check for db existence and connect
    $db_selected = mysqli_select_db($conn, $db_mail);

    //create database if not exists
    if (!$db_selected) {
        $sql = "CREATE DATABASE $db_mail DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
        mysqli_query( $conn, $sql );
    }

    //create table for user storage if not exists
    $sql = "CREATE TABLE IF NOT EXISTS users (
              userFullName varchar(255) NOT NULL,
              userEmail varchar(255) NOT NULL,
              userPhone varchar(255) NOT NULL,
              entryDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
              contactUsID int(11) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (contactUsID)
            ) CHARACTER SET utf8 COLLATE utf8_general_ci";
    mysqli_query( $conn, $sql );

    //sanitize input and set vars
    $userFullName = filter_var($_POST['userFullName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
    $userEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $userMessage = $_POST['userMessage'];

    if (preg_match($regex_phone, $_POST['userPhone'])){
        $userPhone = $_POST['userPhone'];
    } else {
        die('Phone number not set');
    };

    //store userInfo
    $sql = "INSERT INTO users (userFullName, userEmail, userPhone) VALUES ('$userFullName', '$userEmail', '$userPhone')";
    $query = mysqli_query ( $conn, $sql );
    if ( !$query ) {
        die( 'Could not enter data: ' . mysqli_error($conn) );
    }

    //PHP Mailer init
    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     */

    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('America/Chicago');

    require '../libs/PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;                                       //***Important*** - Set to 0 before going live!

    $mail->Debugoutput = 'html';                                //Ask for HTML-friendly debug output
    $mail->Host = 'smtp.gmail.com';                             //Set the hostname of the mail server
    $mail->Port = 587;                                          //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->SMTPSecure = 'tls';                                  //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPAuth = true;                                     //Whether to use SMTP authentication
    $mail->Username = "brassanglo@gmail.com";                   //Username to use for SMTP authentication - use full email address for gmail
    $mail->Password = "Aubie:2010";                             //Password to use for SMTP authentication

    $mail->setFrom($userEmail, $userFullName);                  //Set who the message is to be sent from
    $mail->addReplyTo($userEmail, $userFullName);               //Set an alternative reply-to address
    $mail->addAddress('robwhite4@yahoo.com', 'Rob White IV');   //Set who the message is to be sent to
    $mail->addAddress('sidoram@gmail.com', 'George Marodis');   //Set who the message is to be sent to

    $mail->Subject = 'PHPMailer GMail SMTP test';               //Set the subject line

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
    $mail->msgHTML($userMessage);

    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';

    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        header("Location: " . $mailError);                      //create an error page or redirect elsewhere.  set in /php/variables.php
        //echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        //Send User to Somewhere
        header("Location: " . $thankYouPage);                   //create a thank you for registering page or redirect elsewhere.  set in /php/variables.php
    }

    //close db connection
    $conn = mysqli_close($conn);

}