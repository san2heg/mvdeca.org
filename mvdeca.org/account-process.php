<?php
session_start();
//VARS: gets user input from previous sign in page and assigns it to local variables
//$_POST['signin-email'];
//$_POST['signin-pass'];
$signin_email = $_POST['signin-email'];
$signin_pass = $_POST['signin-pass'];

// connects to MySQL database
include("config.inc.php");
$link = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
$link2 = mysql_connect('23.229.209.225', 'octagonShared', 'decaonpeas');

// checking for user input in the table
$result = mysql_query("SELECT * FROM sank WHERE email = '$signin_email' AND password = '$signin_pass'");   
if (mysql_num_rows($result) > 0) { // if the username and password exist and match in the table
	header("Location: events.php");
    //echo "Account Found";
    $account_arr = mysql_fetch_array($result); // contains all the data from the user's MySQL row
    echo print_r($account_arr);
    $_SESSION['name']=$account_arr['firstname'];
    $_SESSION['lastname']=$account_arr['lastname'];
    $_SESSION['studentid']=$account_arr['studentid'];
    $_SESSION['email']=$account_arr['email'];
    $_SESSION['cellphone']=$account_arr['cellphone'];
    $_SESSION['homephone']=$account_arr['homephone'];
    $_SESSION['tshirtsize']=$account_arr['tshirtsize'];
    $_SESSION['cantext']=$account_arr['cantext'];
    
    $_SESSION['address']=$account_arr['address'];
    $_SESSION['city']=$account_arr['city'];
    $_SESSION['state']=$account_arr['state'];
    $_SESSION['zip']=$account_arr['zip'];
    
    $_SESSION['compu_user']=$account_arr['compu_user'];
    $_SESSION['compu_pass']=$account_arr['compu_pass'];
    
    $_SESSION['parent_firstname']=$account_arr['parent_firstname'];
    $_SESSION['parent_lastname']=$account_arr['parent_lastname'];
    $_SESSION['parent_relation']=$account_arr['parent_relation'];
    $_SESSION['parent_email']=$account_arr['parent_email'];
    $_SESSION['parent_cellphone']=$account_arr['parent_cellphone'];
    $_SESSION['wantupdates']=$account_arr['wantupdates'];
    $_SESSION['lace']=$account_arr['lace'];
    $_SESSION['svcdc'] = $account_arr['svcdc'];
    $_SESSION['states'] = $account_arr['states'];
    mysql_select_db('octagon',$link2);
    $result2 = mysql_query("SELECT * FROM user WHERE email = '$signin_email'");
    if (mysql_num_rows($result2) > 0) {
	    $isOctagonMember = "YES";
    }
    else {
	    $isOctagonMember = "NO";
    }
    mysql_select_db($db_name,$link);
    $_SESSION['isOctagonMember']=$isOctagonMember;
    
    $_SESSION['signedin']="YES";
    $temp_verified=$account_arr['dot_verified'];
    
    
    if ($temp_verified == "0") {
	    $_SESSION['verified']="\r\nUNVERIFIED";
    }
    else {
	    $_SESSION['verified']="";
    }
}
else { // if username and password don't match or they aren't found in the table1
	header("Location: signin-fail.php");
    echo "The email or password you entered is incorrect.";
}

?>