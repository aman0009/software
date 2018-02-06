<h3 class="am">DEPARTMENT OF SOFTWARE ENGINEERING</h3>
<div class="aman">
<nav id="mainav" class="clear">
<ul class="clear">
          <li class="active"><a href="index.php">HOME</a></li>
          <?php if(!isset($_SESSION["sid"])){?>
          <li><a href="login.php">LOGIN</a></li>
          <li><a href="registration.php">SIGN UP</a></li>
		  <?php } ?>
          
          <?php if(isset($_SESSION["sid"])){?>
          <li><a href="edit.php">EDIT</a></li>
          <?php } ?>
		  
		  <?php if(!isset($_SESSION["sid"])){?>
          <li><a href="login.php">COMPLAINTS</a></li>
          <?php }
		  else{?>
          <li><a href="complaint.php">COMPLAINTS</a></li>
          <?php } ?>
          
          <li><a href="event.php">EVENTS</a></li>
          
		  <?php if(isset($_SESSION["sid"])){?>
          <li><a href="reply.php">COMPLAINTS REPLY</a></li>
          <?php } ?>
          
          <li><a href="#">GALLERY</a></li>
          
		  <?php if(isset($_SESSION["sid"])){?>
          <li><a href="logout.php">LOGOUT</a></li>
		  <?php } ?>
      </ul>
</nav>
</div>   