<?php
mysql_connect("localhost","root","");//functionname(hostname,username,password)
mysql_select_db("aman")or die(mysql_error());


$name=$_POST["event"];
$description=$_POST["description"];



$sql="insert into event (name,description)
values('$name','$description')";

$data=mysql_query($sql) or die(mysql_error());

if($data)
{
  echo "UPLOADED SUCCESSFULLY";
}
else
{
	echo "datanotinsert";
}
?>