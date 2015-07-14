<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 1/10/2015
 * Time: 7:15 PM
 * Desc: Set all php config vars here.
 */

//mysql_connect configs

$server = "localhost";                      //Replace "localhost" with the name of your server
$mysql_user = "root";                       //Replace "root" with your mysql username
$mysql_pass = "";                           //Replace "blank" with your password

//databases
$db_mail = 'db_contactus';                  //Used to store users in '/php/mail.php'

//user redirects
$thankYouPage = '../index.php';             //Used in '/php/mail.php'
$mailError = '../index.php?p=mailError';    //Used in '/php/mail.php'