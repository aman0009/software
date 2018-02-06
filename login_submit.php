<?php   
session_start();       
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());

$username=$_POST["username"];
$password=md5($_POST["password"]);

$sql="select * from account where uname='$username' and password='$password'";
$result=mysql_query($sql) or die(mysql_error());
$total_row=mysql_num_rows($result);
$row=mysql_fetch_array($result);
$id=$row["id"];
$_SESSION["sid"]=$id;
if($total_row>0)
{
header("location:complaint.php"); //using get method
}
else{
header("location:login.php?sms=INVALID USERNAME OR PASSWORD");
}
?> 
