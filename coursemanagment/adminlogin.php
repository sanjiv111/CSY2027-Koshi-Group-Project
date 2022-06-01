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
	<link rel="stylesheet" type="text/css" href="adminlogin.css">
</head>
<body>

	<header class="main_header">  

	<a href="#">WELCOME DR. ADAM BLAKE</a>

	
	</header>

<aside class="sidebar">
	<ul>
		<li>
			<a href="#">Dr.Adam Blake</a>
		</li>

		<li>
			<a href="admin_addstudent.php">Add Student</a>
		</li>

		<li>
			<a href="#">View Student</a>
		</li>

		<li>
			<a href="#">Add Courses</a>
		</li>

		<li>
			<a href="#">View Courses</a>
		</li>

		<li>
			<a href="#">Add Module Leader</a>
		</li>

		<li>
			<a href="#">View Module Leader Status</a>
		</li>

		<li>
			<a href="#">Add Tutor</a>
		</li>

		<li>
			<a href="#">View Tutor Status</a>
		</li>

		<li>
			<a href="alllogout.php">SIGN OUT</a>
		</li>

</ul>
</aside>
<div class="admin_dashboard">
	<h1> CMS System Information!</h1>
		<p>The learning technology team would like to hear from you about your experience of using CMS. We value your first-hand experience and your responses can help us to improve the experience for you and other students in the future.</p>


</div>
</body>

</html>