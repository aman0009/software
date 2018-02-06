<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
</head>

<?php
//session_start();
//$id = $_SESSION["sid"];
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());
$sql="select * from complaint";
$result=mysql_query($sql) or die(mysql_error());
?>



<body style="background-color:#213">
<h3 class="am">ADMIN-DEPARTMENT OF SOFTWARE ENGINEERING</h3>
<div class="aman">
<nav id="mainav" class="clear">
<ul class="clear">
        <li class="active"><a href="home.php">HOME</a></li>
        <li><a href="complaint.php">COMPLAINTS</a></li>
        <li><a href="event1.php">UPLOAD EVENTS</a></li>
        <li><a href="gallery.php">UPLOAD PHOTOS</a></li>
        <li><a href="logout1.php">LOGOUT</a></li>       
    </ul>
</nav>
</div>  
<br>
<br>
<table class="admin" border="1">
  <tr>
    <td>Name</td>
    <td>Subject</td>
    <td>Complaint</td>
    <td>Reply</td>
  </tr><?php while($row=mysql_fetch_array($result)){?>
   <tr>  
    <td><?php echo $row["uname"];?></td>
    <td><?php echo $row["subject"];?></td>
    <td><?php echo $row["complaint"];?></td>
    <td><a href="reply.php"><input type="submit" value="Reply"></a></td>
    </tr>
	<?php }?>
</table>
</body>
</html>
