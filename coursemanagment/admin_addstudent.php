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
	<style type="text/css">
		label {
			display: inline-block;
			text-align: right;
			width: 140px;
			padding-top: 12px;
			padding-bottom: 12px;

		}
		.student_form{
			background: #212429;
			width: 380px;
			padding-top: 85px;
			padding-bottom: 85px;
			border-radius: 5px;
			font-size: 17px;
			font-family: sans-serif;
		}

		.admin_dashboard{
			background:#061B39;
			color: white;
			font-family: sans-serif;
			padding-top: 2%;
			padding-bottom: 2%;

		}
	</style>
	
</head>
<body>

	<header class="main_header">  

	<a href="#">WOODLAND UNIVERSITY OF COLLEGE</a>

	
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
	<center>
	<h1> ADD STUDENT</h1>
	<div class="student_form">
		<form>
			<div class>
				<label>Name</label>
				<input type="text" name="name">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email">
			</div>
			<div>
				<label>Contact</label>
				<input type="number" name="contact">
			</div>
			<div>
				<label>Passcode</label>
				<input type="text" name="password">
			</div>
			<div>
				
				<input type="submit" name="add_newstudent" value="ADD STUDENT">
			</div>
		</form>
	</div>
	</center>

</div>
</body>

</html>