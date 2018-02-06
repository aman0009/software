<?php 
session_start();
if(!isset($_SESSION["sid"])){ 
header("location:login.php");
 } 
?>

<?php
$id = $_SESSION["sid"];
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());
$sql="select * from account where id=$id";
$result=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($result);
?>

<html>
<head>
<title>COMPLAINT FORM</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
</head>
<body style="background-color:#213">
<?php include("header.php");?>  
<form action="complaint_submit.php" method="post">     
<div class="rounded">
<table align="center" cellpadding="5px">
<h3 style="color:#213; font-size:34px; text-align:center;">COMPLAINT FORM</h3>
<tr>
     <td style="color:#213;">USERNAME:</td> 
     <td><?php echo $row["uname"];?></td>
</tr>

<tr>
   <td style="color:#213;"> SUBJECT:</td>
   <td><textarea name="subject" style="width: 404px; height: 34px;"></textarea></td></br>
</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>
   <td style="color:#213"><p>DESCRIPTION:</p></td>
   <td><textarea name="complaint" style="width: 404px; height: 148px;"></textarea></td>
</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>
<tr>&nbsp;</tr>

<tr>
   <td>&nbsp;  </td>
   <td align="center"><input type="submit" value="submit"></td>
   <td><input type="hidden" name="username" value="<?php echo $row["uname"];?>" placeholder="Username"/>
</tr>

</table>
</div>
</div>
</form>
</body>
</html>
