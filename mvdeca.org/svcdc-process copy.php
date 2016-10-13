<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		header("Location: signin.php");
	}
	else if ($_SESSION['svcdc'] != 0) {
		header("Location: events.php");	
	}
	else {
		$roleplay = $_POST['roleplay'];
		$role_partner = $_POST['role_partner'];
		$written = $_POST['written'];
		$writ_partner1 = $_POST['writ_partner1'];
		$writ_partner2 = $_POST['writ_partner2'];
		$email = $_SESSION['email'];
		
		$svcdc_room1 = $_POST['svcdc_room1'];
		$svcdc_room2 = $_POST['svcdc_room2'];
		$svcdc_room3 = $_POST['svcdc_room3'];
		
		$cellphone = $_POST['cellphone'];
		$cell_carrier = $_POST['cell_carrier'];
		$svcdc_updates = $_POST['svcdc_updates'];
		
		include("config.inc.php");
		$link = mysql_connect($db_host,$db_user,$db_pass);
		mysql_select_db($db_name,$link);
		mysql_query("UPDATE sank SET svcdc=1, roleplay='$roleplay', role_partner='$role_partner', written='$written', writ_partner1='$writ_partner1', writ_partner2='$writ_partner2', svcdc_room1='$svcdc_room1', svcdc_room2='$svcdc_room2', svcdc_room3='$svcdc_room3', cellphone='$cellphone', cell_carrier='$cell_carrier', svcdc_updates='$svcdc_updates' WHERE email='$email'");
		mysql_query("INSERT INTO svcdc SELECT * FROM sank WHERE email='$email'");
		$_SESSION['svcdc']=1;
		header("Location: svcdc.pdf");
	}
?>