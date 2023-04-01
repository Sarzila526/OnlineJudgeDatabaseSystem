<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="login_style.css">
  <style>
    #msg1 {
      color: red;
    }
  </style>
  <script src="../Controller/login.js"></script>
</head>
<body>

<div class="container">

    <h1 class="label">User Login</h1>

<form class="login_form" name="fomData" action="../Controller/loginAction.php" method="post"
 onsubmit="return getData(this);">
  
  <div class="font">User Name</div>
  <input type="text"  name="uname"value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>">
  
  <div class="font font2">Password</div>
  <input type="password" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>"> 
  <br><br>
<input type="checkbox"name="remember" id="re" />
<label for="remember-me">Remember me</label> 

  <p id="msg1"></p>

  <button type="submit">Login</button>

  <br><br>
<h3 class="label1">Not Yet Registred!<a href="RegForm.php">Click here</a> for Register</h3>
<br><br>

</form>

</div>


</body>
</html>