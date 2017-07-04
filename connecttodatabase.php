<?php
$host="localhost";
$user="root";
$password="";
$dbname="blogixiaregistration";
$connection = mysqli_connect($host,$user,$password,$dbname); //The Blank string is the password



	$fullName = $_POST['user'];
	$Mobile = $_POST['mno'];
	$Email = $_POST['em'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpass'];
	$username = $_POST['user1'];
	$dob = $_POST['dob'];
	

	$query="insert into registration(fullname,mobile,email,password,confirmpassword,username,dob) values('$fullName','$Mobile','$Email','$password','$conpassword','$username','$dob')";

	if(mysqli_query($connection,$query))
	{
		header('Location:http://www.google.com');
	}
	else
	{
		echo "Failed";
	}




?>

