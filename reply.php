<?php 
session_start();
if(!isset($_SESSION["sid"])){ 
header("location:login.php");
 } 
$id = $_SESSION["sid"];
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());
$sql="select * from reply where id=$id";
$result=mysql_query($sql) or die(mysql_error());
?>

<html>
<head>
<title>REPLY</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
</head>
<body bgcolor="#213">
<?php include("header.php");?>   

<div class="rounded"> 

<table class="admin" border="0">
    
  <?php 
  while($row=mysql_fetch_array($result)){
  ?>
  <tr>
   <td>COMPLAINTS REPLY:<?php echo $row["reply"];?></td>
  </tr>
 <?php }?>
 </table>
 </div>
 </body>
 </html>   