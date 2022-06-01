<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="coursemanagement";
$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
	die("Unable to connection Error!");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name = $_POST['wucname'];

	$pass = $_POST['password'];

	$sql="select * from users where wucname='".$name."' AND
	passcode='".$pass ."'  ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);


	if($row["usertype"]=="student")
	{
		$_SESSION['wucname']=$name;
		header("location:studentlogin.php");

		

	}

	else if($row["usertype"]=="admin")
	{
		$_SESSION['wucname']=$name;
		header("location:adminlogin.php");
		

	}
	else {

		
		$message="The username or password you entered is incorrect, not in the database!";
		$_SESSION['[loginMessage]']=$message;
		header("location:login.php");
	}


}

?>