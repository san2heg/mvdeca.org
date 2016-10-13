<?php
	session_start();
    $_SESSION['signedin']="NO";
	session_destroy();
	header("Location: index.php");
?>
