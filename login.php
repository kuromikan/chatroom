<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<form id="form1" name="form1" method="post" action="logindec.php">
  <br>
  <label for="username"></label>
  username <input type="text" name="username" id="username" />
  <br>
  <label for="passwd"></label>
  password <input type="password" name="passwd" id="passwd" />
  <input type="submit" name="submit" id="submit" value="Submit" />
</body>
</html>