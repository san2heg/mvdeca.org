<?php
session_start();

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

// Checkbox handling
$field_11_opts = $_POST['cantext'][0];

// Checkbox handling
$field_19_opts = $_POST['wantupdates'][0];

include("config.inc.php");
$link = mysql_connect($db_host,$db_user,$db_pass);
if(!$link) die ('Could not connect to database: '.mysql_error());
mysql_select_db($db_name,$link);
$query = "INSERT into `".$db_table."` (firstname,lastname,studentid,email,password,gender,birthday,gradyear,status,cellphone,cantext,tshirtsize,parent_firstname,parent_lastname,parent_relation,parent_email,parent_cellphone,homephone,wantupdates,address,city,state,zip) VALUES ('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['studentid'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['gender'] . "','" . $_POST['birthday'] . "','" . $_POST['gradyear'] . "','" . $_POST['status'] . "','" . $_POST['cellphone'] . "','" . $_POST['cantext'][0] . "','" . $_POST['tshirtsize'] . "','" . $_POST['parent_firstname'] . "','" . $_POST['parent_lastname'] . "','" . $_POST['parent_relation'] . "','" . $_POST['parent_email'] . "','" . $_POST['parent_cellphone'] . "','" . $_POST['homephone'] . "','" . $_POST['wantupdates'][0] . "','" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['state'] . "','" . $_POST['zip'] . "')";
mysql_query($query);
mysql_close($link);

mail("sanketh.hegde@mvdeca.org","phpFormGenerator - Form submission","Form data:

FIRST NAME: " . $_POST['firstname'] . " 
LAST NAME: " . $_POST['lastname'] . " 
STUDENT ID: " . $_POST['studentid'] . " 
EMAIL ADDRESS: " . $_POST['email'] . " 
PASSWORD: " . $_POST['password'] . " 
GENDER: " . $_POST['gender'] . " 
BIRTHDAY: " . $_POST['birthday'] . " 
GRADUATION YEAR: " . $_POST['gradyear'] . " 
MEMBERSHIP STATUS: " . $_POST['status'] . " 
STUDENT CELLPHONE: " . $_POST['cellphone'] . " 
CAN YOU TEXT?: $field_11_opts
T-SHIRT SIZE: " . $_POST['tshirtsize'] . " 
PARENT FIRST NAME: " . $_POST['parent_firstname'] . " 
PARENT LAST NAME: " . $_POST['parent_lastname'] . " 
PARENT RELATION: " . $_POST['parent_relation'] . " 
PARENT EMAIL ADDRESS: " . $_POST['parent_email'] . " 
PARENT CELLPHONE NUMBER: " . $_POST['parent_cellphone'] . " 
HOME PHONE: " . $_POST['homephone'] . " 
WANT PARENT UPDATES?: $field_19_opts
HOME ADDRESS: " . $_POST['address'] . " 
CITY: " . $_POST['city'] . " 
STATE: " . $_POST['state'] . " 
ZIP CODE: " . $_POST['zip'] . " 


 powered by phpFormGenerator.
");

mail( $_POST['email'], "Your MVDECA Registration Receipt","Dear " . $_POST['firstname'] . ",

Thank you for registering with Monta Vista DECA. Your information is included below, if you see any errors, please let us know. To verify your membership, please show an electronic/printed version of this email to a Tech Team officer.  

First Name " . $_POST['firstname'] . " 
Last Name: " . $_POST['lastname'] . " 
Student ID: " . $_POST['studentid'] . " 
Email Address: " . $_POST['email'] . " 
Student Cell: " . $_POST['cellphone'] . " 

Toodles,
Department of Technology
Monta Vista DECA
dot@mvdeca.org
www.mvdeca.org

-This is an automated message, please do not reply to this email. To report issues, email dot@mvdeca.org. Generated for " . $_POST['studentid'] . "  -

");


include("confirm.php");

?>