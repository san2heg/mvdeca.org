<?php
//VARS: gets user input from previous sign in page and assigns it to local variables
//$_POST['signin-email'];
//$_POST['signin-pass'];
$reset_email = $_POST['reset-email'];

// connects to MySQL database
include("config.inc.php");
$link = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$link);

// checking for user input in the table
$result = mysql_query("SELECT * FROM sank WHERE email = '$reset_email'");   
if (mysql_num_rows($result) > 0) { // if the username and password exist and match in the table
	$rand = unique_id(8);
	mail($reset_email, "MVDECA Password Reset","Dear MVDECA User,
	
Your temporary MVDECA account password is:
". $rand ."

Please login to your account using this password and change your password.
www.mvdeca.org/signin.php

Not you?
Please ignore this email.

Toodles,
Department of Technology
Monta Vista DECA
dot@mvdeca.org
www.mvdeca.org

-This is an automated message, please do not reply to this email. To report issues, email dot@mvdeca.org.-
	
	");
	mysql_query("UPDATE sank SET password='$rand' WHERE email='$reset_email'");
	header("Location: forgot-success.php");
	echo "Email Sent";

}
else { // if username and password don't match or they aren't found in the table
	header("Location: forgot-fail.php");
    echo "The email you entered is not registered.";
}

function unique_id($l) {
    return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}


?>