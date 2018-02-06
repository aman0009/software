<?php

session_start();
$id = $_SESSION["sid"];
mysql_connect("localhost","root","");
mysql_select_db("aman") or die(mysql_error());
$sql="select * from account where id=$id";
$result=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($result);
$gender=$row["gender"];
$city=$row["city"];
$language=$row["language"];
$language_new=explode(",",$language);
?>

<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>           
</head>
<body style="background-color:#213">

<?php include("header.php");?>        
<form action="edit_submit.php" method="POST" enctype="multipart/form-data">
<div class="rounded">
<ins><b> <h3 class="z" style="text-align:center"> REGISTRATION FORM </h3></b></ins></br>      
<table width="343" height="381" align="center">

            <tr>
              <td style="color:#213; font-size:20px">Username:</td> 
              <td><input type="text" name="username" value="<?php echo $row["uname"];?>" placeholder="Username" /></td>
            </tr>
           
            <tr>
              <td style="color:#213; font-size:20px">Password:</td> 
			  <td><input type="password" name="password"  value="<?php echo $row["password"];?>" placeholder="Password" /></td>
            </tr>
            <tr>
              <td style="color:#213; font-size:20px">Name:</td> 
              <td> <input type="text" name="name"  value="<?php echo $row["name"];?>" placeholder="Name"/></td>
             </tr>
            
            <tr>
             <td style="color:#213; font-size:20px">Email:</td> 
              <td> <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  value="<?php echo $row["email"];?>"  placeholder="Email"/></td>
              </tr>
            
            <tr>
              <td style="color:#213; font-size:20px">Gender:</td>
                  <td style="color:#213; font-size:20px"> 
                    Male<input type="radio" name="gender" value="Male" <?php if($gender=="Male") {echo "checked";}?>  />
                    Female<input type="radio" name="gender" value="Female" <?php if($gender=="Female") {echo "checked";}?>  />
                   </td>
           </tr>            
            
            <tr>
              <td style="color:#213; font-size:20px">City:</td> 
              <td>
              <select name="city">
              <option value="">--select--</option>
              <option <?php if($city=="Indore") {echo "selected";}?>>Indore</option>
              <option <?php if($city=="Bhopal") {echo "selected";}?>>Bhopal</option>
              <option <?php if($city=="Mumbai") {echo "selected";}?>>Mumbai</option>
              <option <?php if($city=="Banglore") {echo "selected";}?>>Banglore</option>
              <option <?php if($city=="Chennai") {echo "selected";}?>>Chennai</option>
              </select>
              </td>
             </tr>
           
           <tr>
              <td style="color:#213; font-size:20px"style="color:#213; font-size:20px">Address</td> <td><textarea name="address"/><?php echo $row["address"];?></textarea></td>
          </tr>
           
            <tr>
              <td style="color:#213; font-size:20px">Languages </td> 
              <td style="color:#213; font-size:20px">
               Hindi<input type="checkbox" name="language[]" value="hindi" <?php if(in_array("hindi",$language_new)) {echo "checked";}?> />
               German<input type="checkbox" name="language[]" value="german" <?php if(in_array("german",$language_new)) {echo "checked";}?> />
               English<input type="checkbox" name="language[]" value="english" <?php if(in_array("english",$language_new)) {echo "checked";}?> />   
              </td>
            </tr>
             
             <tr>
             <td style="color:#213; font-size:20px">Image</td>
             <td style="color:#213; font-size:20px">
             <input type="file" name="filetoUpload">
             </td>
             </tr>
              
             <tr>
             <td>&nbsp;  </td>
             <td>&nbsp;  </td>
             </tr>
             
             <tr>
             <td>&nbsp;  </td>
             <td>
             <input type="submit" value="submit" name="insert">
             </td> 
             </tr>
            
</table>
</div>
</form>
</body>
</html>