<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
session_start();
include("../conn/mysql.inc.php"); 

	if (!empty($_SERVER['HTTP_CLIENT_IP']))
	{
	  $ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
	  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
	  $ip=$_SERVER['REMOTE_ADDR'];
	}
	$datetime=date("Y-m-d H:i:s");
	$username= $_SESSION['admin'];
	$get_msg=$_GET["msg"];
	$sql="INSERT INTO `chatroom`.`message` (`id`, `username`, `msg`, `ip`, `time`) VALUES (NULL, '$username', '$get_msg', '$ip', '$datetime');";
	
	$result = mysql_query($sql) ;
	
?>