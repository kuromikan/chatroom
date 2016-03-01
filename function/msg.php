<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script>
function logout() {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("txtHint_insert").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","logout.php",true);
        xmlhttp.send();
		window.open('../index.html','down');
    
}
</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="logindec.php">
  <br>
  <table>
  <tr><td>msg <input type="text" id="msg" /></td>
  <td><input type="button" id="submit" value="Submit" /></td></tr>
  <tr><td></td><td><input type="button" id="logout_btn" value="logout" onClick="logout();" /></td></tr>
  </table>
</body>
</html>