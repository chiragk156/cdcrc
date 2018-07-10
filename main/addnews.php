<?php
include "common.php";
session_start();
if(isset($_SESSION['userid'])){
	$sql = "INSERT INTO cdcrc_news(display_text,link) VALUES(\"".$_POST["display_text"]."\",\"".$_POST["link"]."\")";
	$con->query($sql);
	header("Location: admin.php");
}
else{
	header("Location: login.php");
}
?>