<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());

$id = $_SESSION["sid"];
$username=$_POST["username"];
$subject=$_POST["subject"];
$complaint=$_POST["complaint"];

$sql="insert into complaint(userid,uname,subject,complaint) values('$id','$username','$subject','$complaint')"; 
$data=mysql_query($sql) or die(mysql_error());
if($data)
{
  echo "COMPLAINT REGISTERED SUCCESSFULLY";
}
else
{
	echo "datanotinsert";
}

?>