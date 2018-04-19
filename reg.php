<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <title>Registration</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body style="background-color:slategray;">
<div>
  <div class="login-card">
    <h1>Sign-in</h1>
  <form action="reg1.php" method="POST">
  Name:
    <input type="text" name="name"  >
  <br>
  Username:
    <input type="text" name="username"  >
	<br>
	Password:
	<input type="password" name="password" >
	<br>Confirm Password:
	<input type="password" name="cpassword"  >
	<br>  <label>Date Of Birth</label>
  	<br>  <input type="date" name="dob"   max="1999-12-31"  >
 <br><br> Gender
<br>	<select name="gender"  >
<option value="" >Choose your gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Transgender">Transgender</option>
</select><br><br>
	Area
    <input type="text" name="area" style="text-transform: capitalize;" >

Aadhar Number
    <input type="text" name="aadhar">
  
	<input type="submit" name="login" class="login login-submit" value="Register">
  </form>
  

  <div class="login-help">
  <button>  <a href="login.php">Login</a> </button>
  
</div>
</div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>