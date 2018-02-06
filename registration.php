
<?php
error_reporting(0);
if(isset($_POST["insert"]))
{
mysql_connect("localhost","root","");//functionname(hostname,username,password)
mysql_select_db("aman")or die(mysql_error());



$username=$_POST["username"];
$password=md5($_POST["password"]);
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$address=$_POST["address"];
$language=$_POST["language"];
$language_new= implode(",",$language);
$img=$_FILES["filetoUpload"]["name"];
//$img=$_FILES["filetoUpload"]["size"];
//$img=$_FILES["filetoUpload"]["type"];
//$img=$_FILES["filetoUpload"]["tmp_name"];

move_uploaded_file($_FILES["filetoUpload"]["tmp_name"],"pic/$img");
    //insert into tablename (data field value) values(variables in which values are stored)
$sql="insert into account (uname,password,name,email,gender,city,address,language,Image)
values('$username','$password','$name','$email','$gender','$city','$address','$language_new','$img')";
$data=mysql_query($sql) or die(mysql_error());
		
		if($data)
		{
		  echo "REGISTERED SUCCESSFULLY";
		}
		else
		{
			echo "datanotinsert";
		}
}//isset function used here
?>

<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="aman.css"/>
<script type="text/javascript">
function vali()
{                    //document.myForm.name.value; 
	var username = document.am.username.value;
	var password = document.am.password.value;
	var name = document.am.name.value;
	var email = document.am.email.value;
	var radios = document.getElementsByName("gender");
    var formvalid = false;
	var address = document.am.address.value;
	
    
	if(username=="")
	{
		alert("Please enter the username");
		document.am.username.focus();
		return false;
	}
	if(password=="")
	{
		alert("Please enter the password");
		document.am.password.focus();
		return false;
	}
	if(name=="")
	{
	   alert("Please enter the name");
	   document.am.name.focus();
	   return false;	
	}
	if(email=="")
	{
	   alert("Please enter the email");
	   document.am.email.focus();
	   return false;	
	}
	var i=0;
	while(!formvalid && i<radios.length)
	{
	 if(radios[i].checked)  formvalid=true;
	 i++;
	 }
	 if(!formvalid) alert("Must check some option");
	 return formvalid;
    if( document.am.city.value == "" )
         {
            alert( "Please provide your city!" );
            return false;
         }
    if(address=="")
	{
	   alert("Please enter the address");
	   document.am.address.focus();
	   return false;	
	}
}
</script>           

</head>

<body style="background-color:#213">

<?php include("header.php");?>        
<form action="registration.php" method="POST" enctype="multipart/form-data" name="am" onSubmit="return vali()">
<div class="rounded">
<ins><b> <h3 class="z" style="text-align:center"> REGISTRATION FORM </h3></b></ins></br>      
<table width="343" height="381" align="center">

            <tr>
              <td style="color:#213; font-size:20px">Username:</td> 
              <td><input type="text" name="username" placeholder="Username" /></td>
            </tr>
           
            <tr>
              <td style="color:#213; font-size:20px">Password:</td> 
			  <td><input type="password" name="password" placeholder="Password" /></td>
            </tr>
            <tr>
              <td style="color:#213; font-size:20px">Name:</td> 
              <td> <input type="text" name="name" placeholder="Name" pattern="[A-Za-z\s]{0-15}"/></td>
             </tr>
            
            <tr>
             <td style="color:#213; font-size:20px">Email:</td> 
              <td> <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email"/></td>
              </tr>
            
            <tr>
              <td style="color:#213; font-size:20px">Gender:</td>
                  <td style="color:#213; font-size:20px"> 
                    Male<input type="radio" name="gender" value="Male" />
                    Female<input type="radio" name="gender" value="Female" />
                   </td>
           </tr>            
            
            <tr>
              <td style="color:#213; font-size:20px">City:</td> 
              <td>
              <select name="city">
              <option value="">--select--</option>
              <option>Indore</option>
              <option>Bhopal</option>
              <option>Mumbai</option>
              <option>Banglore</option>
              <option>Chennai</option>
              </select>
              </td>
             </tr>
           
           <tr>
              <td style="color:#213; font-size:20px"style="color:#213; font-size:20px">Address</td> <td><textarea name="address"/></textarea></td>
          </tr>
           
            <tr>
              <td style="color:#213; font-size:20px">Languages </td> 
              <td style="color:#213; font-size:20px">
               Hindi<input type="checkbox" name="language[]" value="hindi" />
               German<input type="checkbox" name="language[]" value="german" />
               English<input type="checkbox" name="language[]" value="english" />   
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