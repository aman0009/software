<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());

$id = $_SESSION["sid"];
$reply=$_POST["reply"];

$sql="insert into reply (userid,reply) values('$id','$reply')";
$data=mysql_query($sql) or die(mysql_error());

if($data)
{
  echo "REPLY DONE"	;
}
else
{
	echo "REPLY NOT DONE";
}
?>