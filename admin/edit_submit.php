<?php
//session_start();
//$id = $_SESSION["sid"];
mysql_connect("localhost","root","");//functionname(hostname,username,password)
mysql_select_db("aman")or die(mysql_error());

$username=$_POST["username"];
$password=$_POST["password"];
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$address=$_POST["address"];
$language=$_POST["language"];
$language_new=implode(",",$language);
$img=$_FILES["filetoUpload"]["name"];
move_uploaded_file($_FILES["filetoUpload"]["tmp_name"],"pic/$img");

$sql="update account set uname='$username',password='$password',name='$name',email='$email',gender='$gender',city='$city',address='$address',language='$language_new',Image='$img'";
mysql_query($sql) or die(mysql_error());
header("location:home.php");
?>