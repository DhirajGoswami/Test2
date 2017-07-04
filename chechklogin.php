<?php
	$username=$_POST['user'];
	$password=$_POST['password'];
	$login=$_SERVER['HTTP_REFERER'];
	
	if((!$username) or (!$password))
	{
	header("Location:$login");
	exit();
	}
	$conn=@mysql_connect("localhost","root","") or die("Cannot Connect");
	$rs=@mysql_select_db("blogixia registration",$conn) or die("DB ERROR");
	$sql="select * from registration where username=\"$username\" and password=\"$password\"";
	$rs=mysql_query($sql,$conn) or die ("Could not execte");
	$rows=mysql_numrows($rs);
	if($rows!=0)
	{
	echo("<h2> $username ok welcome to blogixia</h2>");
	}
	else
	{
	header("Location:$login");
	exit();
	}
	
?>