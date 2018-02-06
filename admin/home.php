<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
</head>
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
<?php

mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());
$sql="select * from account";
$result=mysql_query($sql) or die(mysql_error());
//$gender=$row["gender"];
//$city=$row["city"];
//$language=$row["language"];
//$language_new=explode(",",$language);
?>
<br>
<br>   
<p>&nbsp;</p>
<div class="round">
<div class="ro">
<table border="1" align="center" style="color:#213;">
<tr >
    <td style="color:#213">Username</td>
    <td>Password</td>
    <td>Name</td>
    <td>Email</td>
    <td>Gender</td>
    <td>City</td>
    <td>Address</td>
    <td>Language</td>
    <td>Image</td>
</tr>
<?php while($row = mysql_fetch_array($result)){?>
   <tr>
    <td><?php echo $row["uname"];?></td>
    <td><?php echo $row["password"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["gender"];?></td>
    <td><?php echo $row["city"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["language"];?></td>
    <td><?php echo $row["image"];?></td>
   </tr> 
   <?php }?>
</table>
</div>
</div>
</body>
</html>