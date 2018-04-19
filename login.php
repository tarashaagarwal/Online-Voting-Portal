<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<style>
div {
    top: 10%;
    left:20%;
    
}
</style>
  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body style="background-color:slategray;">
<div>
  <div class="login-card">
    <h1>Log-in as Voter</h1><br>
	
  <form method="POST" action="login1.php" >
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>
  

  <div class="login-help">
    <a href="register.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>
</div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>