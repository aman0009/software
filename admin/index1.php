<html>
<head>
<title>LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
</head>
<body style="background-color:#213">
<h3 class="am">ADMIN-DEPARTMENT OF SOFTWARE ENGINEERING</h3>
<div class="aman">
<nav id="mainav" class="clear">
<ul class="clear">
        
    </ul>
</nav>
</div>    
<script type="text/javascript">
function vali()
{                    //document.myForm.name.value; 
	var username = document.am.username.value;
	var password = document.am.password.value; 
	if(username=="")
	{
		alert("Please enter the username");
		document.am.username.focus();
		return false;
	}
	if(password=="")
	{
		alert("Please enter the password");
		document.am.password.focus();
		return false;
	}
}
</script>
<form action="login_submit.php" method="post" name="am" onSubmit="return vali()">
 <div class="rounded">
 <table align="center">
  <h1 align="center" style="color:#213; font-weight: 100;">ADMIN LOGIN</h1></br></br>
  <h3 align="center" style="color:#213; font-weight: 100;">
		<?php
        if(isset($_GET["sms"]))
        {
           echo $_GET["sms"];
        }
        ?>
  </h3>
<tr>
   <td style="color:#213; font-size:20px">Username:</td>
   <td><input type="text" name="username" pattern:"RA[0-9]{13}"></td>
</tr>  
<tr>
   <td style="color:#213; font-size:20px">Password:</td>
   <td><input type="password" name="password"></td>
</tr>
<tr>
   <td>&nbsp; </td>
   <td><input type="submit" value="submit"></td>
</tr>
</table>
</div>
</form>
</body>      
</html>