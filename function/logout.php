<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
session_start();
$_SESSION['admin'] = NULL;
if($_SESSION['admin'] != NULL)
{
	$_SESSION['admin'] = NULL;
	header("Location: ../index.html");
}
else
{
	header("Location: ../index.html");
}
?>