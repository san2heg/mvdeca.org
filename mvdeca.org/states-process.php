<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		header("Location: signin.php");
	}
	else if ($_SESSION['states'] != 0) {
		header("Location: events.php");	
	}
	else {
		$roleplay = $_POST['roleplay'];
		$role_partner = $_POST['role_partner'];
		$written = $_POST['written'];
		$writ_partner1 = $_POST['writ_partner1'];
		$writ_partner2 = $_POST['writ_partner2'];
		$email = $_SESSION['email'];
		
		$svcdc_room1 = $_POST['states_room1'];
		$svcdc_room2 = $_POST['states_room2'];
		$svcdc_room3 = $_POST['states_room3'];
		
		$cellphone = $_POST['cellphone'];
		$cell_carrier = $_POST['cell_carrier'];
		$svcdc_updates = $_POST['states_updates'];
		
		include("config.inc.php");
		$link = mysql_connect($db_host,$db_user,$db_pass);
		mysql_select_db($db_name,$link);
		mysql_query("UPDATE sank SET states=1, roleplay='$roleplay', role_partner='$role_partner', written='$written', writ_partner1='$writ_partner1', writ_partner2='$writ_partner2', states_room1='$svcdc_room1', states_room2='$svcdc_room2', states_room3='$svcdc_room3', cellphone='$cellphone', cell_carrier='$cell_carrier', states_updates='$svcdc_updates' WHERE email='$email'");
		$_SESSION['states']=1;
		header("Location: states.pdf");
	}
?>