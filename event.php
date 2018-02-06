<html>
<head>
<title>EVENTS</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
</head>

<?php
session_start();
//$id = $_SESSION["sid"];
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());
$sql="select * from event";
$result=mysql_query($sql) or die(mysql_error());

?>
<body style=" background-color:#213">
<?php include("header.php");?>   

<div class="rounded"> 

<table class="admin" border="0">
    
  <?php 
  while($row=mysql_fetch_array($result)){
  ?>
   <tr>
    <td colspan="2"><b>NAME:-<?php echo $row["name"];?></b></td>
    </tr>
    <tr>
    <td colspan="2">DESCRIPTION:-<?php echo $row["description"];?></td>
   </tr>
   <tr>
   <td>&nbsp;</td>
   </tr> 
   
   <?php }?>
   
</table>
</div>
</body>
</html>
