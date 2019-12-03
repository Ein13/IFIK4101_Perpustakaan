<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT nik FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $myusername;
         
         header("location: v_home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="css/css_login.css">
    </head>
    <body>
        <div class="logo">
            <img src="images/logox.png">
        </div>
        <header>
            <div class="top">
                <h1>LOG IN</h1>
            </div>            
            <form class="login" method="POST">
                <p>Username</p>
                <input type='text' name='username' placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="loginbtn" value="Log In">
            </form>
            <div class="home">
                <a href="v_home.php" class="button">Home</a>
            </div>
        </header>
    </body>
</html>