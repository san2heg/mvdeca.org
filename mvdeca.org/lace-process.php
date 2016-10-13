<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		header("Location: signin.php");
	}
	else if ($_SESSION['lace'] != 0) {
		header("Location: events.php");	
	}
	else {
		$meal_pref = $_POST['meal_pref'];
		$med_group = $_POST['med_group'];
		$policynum = $_POST['policynum'];
		$med_address = $_POST['med_address'];
		$emerg_name = $_POST['emerg_name'];
		$emerg_number = $_POST['emerg_number'];
		$third_class = $_POST['third_class'];
		$fourth_class = $_POST['fourth_class'];
		$fifth_class = $_POST['fifth_class'];
		$interest_roleplay = $_POST['interest_roleplay'];
		$role_partner = $_POST['role_partner'];
		$interest_written = $_POST['interest_written'];
		$writ_partner1 = $_POST['writ_partner1'];
		$writ_partner2 = $_POST['writ_partner2'];
		$email = $_SESSION['email'];
		
		$lace_roomate1 = $_POST['lace_roomate1'];
		$lace_roomate2 = $_POST['lace_roomate2'];
		$lace_roomate3 = $_POST['lace_roomate3'];
		
		include("config.inc.php");
		$link = mysql_connect($db_host,$db_user,$db_pass);
		mysql_select_db($db_name,$link);
		mysql_query("UPDATE sank SET lace=1, meal_pref='$meal_pref', med_group='$med_group', policynum='$policynum', med_address='$med_address', emerg_name='$emerg_name', emerg_number='$emerg_number', third_class='$third_class', fourth_class='$fourth_class', fifth_class='$fifth_class', interest_roleplay='$interest_roleplay', role_partner='$role_partner', interest_written='$interest_written', writ_partner1='$writ_partner1', writ_partner2='$writ_partner2', lace_roomate1='$lace_roomate1', lace_roomate2='$lace_roomate2', lace_roomate3='$lace_roomate3' WHERE email='$email'");
		mysql_query("INSERT INTO lace SELECT * FROM sank WHERE email='$email'");
		$_SESSION['lace']=1;
		header("Location: svlace.pdf");
	}
?>