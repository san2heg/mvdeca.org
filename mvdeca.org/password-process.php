<?php
session_start();
//VARS: gets user input from previous sign in page and assigns it to local variables
//$_POST['signin-email'];
//$_POST['signin-pass'];
$new_pass = $_POST['new-pass'];
$current_pass = $_POST['current-pass'];
$email = $_SESSION['email'];

// connects to MySQL database
include("config.inc.php");
$link = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$link);

// checking for user input in the table
$result = mysql_query("SELECT * FROM sank WHERE email = '$email' AND password = '$current_pass'");   
if (mysql_num_rows($result) > 0) { // if the username and password exist and match in the table
	mysql_query("UPDATE sank SET password='$new_pass' WHERE email='$email'");
	header("Location: password-success.php");
}
else { // if username and password don't match or they aren't found in the table
	header("Location: password-fail.php");
    echo "The password you entered is incorrect.";
}

?>