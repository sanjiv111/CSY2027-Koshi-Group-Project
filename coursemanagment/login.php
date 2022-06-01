<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Woodland Univeristy College</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="form_maintitle">
		<h1 class="form_texttitle">WOODLAND UNIVERSITY COLLEGE</h1>
	</div>
	<center>
		<div class= "form_container">
			<center class="form_header">
				Course Management System
				 CMS Login Portal
				<h3>
					<?php
					error_reporting(0);
					session_start();
					session_destroy();
					echo $_SESSION['loginMessage'];
					?>
				</h3>
			</center>
			<form action="form_login.php" method="POST" class="form_login">
				<div>
					<label class="form_text">WUC Id</label>
					<input type="text" name="wucname">

				</div>
				<div>
					<label class="form_text">Passcode</label>
					<input type="password" name="password">

				</div>
				<div >
					
					<input type="submit" name="submit"
					value="Login">

				</div>

			</form>



		</div>
	</center>

</body>
</html>