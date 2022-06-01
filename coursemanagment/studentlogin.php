<?php

session_start();
if(!isset($_SESSION['wucname']))
{
	header("location:login.php");
}


?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> WELCOME TO YOUR DASHBOARD</title>
</head>

	<h1> STUDENT HOMEPAGE </h1>

	<a href="alllogout.php">Logout </a>

</html>