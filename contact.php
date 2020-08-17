<?php
session_start();
?>

<html>

  <head>
    <title> Contact MyShop </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="contact.css">

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
    <li>
     <a href="#">
     <img src="images\logo.png" style="width:190px; height:60px;">
     </a>
     </li>
    </div>
    <ul class="nav navbar-nav">
     
      <li class="active"><a href="home.php " style="margin-left: 60px;">Home</a></li>
      	<li>
      		<a href="cloths.php"><font style="size:25px; ">Account</a></font></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="contact.php">About</a></li>
          <li><a href="contact.php">Page 1-2</a></li>
         
        </ul>
      </li>
      <li><a href="#">Post</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" style="margin-right: 20px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php" style="margin-right: 40px;"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li></font>
    </ul>
  </div>
</nav>
  


    
    <div class="container"  >
    <div class="col-md-5" style="float: none; margin: 0 auto; ">
      <div class="form-area" style="border-radius: 20px;">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="Number" class="form-control" id="moblie" name="moblie" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>

    <?php
if (isset($_POST['submit'])){
require 'connection1.php';
$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$moblie = $conn->real_escape_string($_POST['moblie']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(name,email,moblie,subject,message) VALUES('$name','$email','$moblie','$subject','$message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

else{
  echo "successful submitted";
}
$conn->close();
}
?>
    </div>

    

     </body>

  
</html>