<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
session_start();

if($_SESSION['admin'] == "")
{
	include("../conn/mysql.inc.php");
	$post_username=$_POST["username"];
	$post_password=$_POST["passwd"];
	$sql_username="";
	$sql_password="";
	$sql = "select `username`,`password` from `user` where `username`='$post_username'";
	//echo $sql;
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_row($result))
		{
			$sql_username=$row[0];
			$sql_password=$row[1];
		}
	if($sql_username==$sql_username && $post_password==$sql_password && $post_username!="" && $post_password!="")
	{
		$_SESSION['admin'] = "$sql_username";
		header("Location: ../main.html");
	}else
	{
		header("Location: ../index.html");
	}
	ob_end_flush();
	
}
else
{
	header("Location: ../main.html");
}
echo $_SESSION['admin'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
