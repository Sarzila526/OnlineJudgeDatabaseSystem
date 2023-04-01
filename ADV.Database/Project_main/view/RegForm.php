<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="RegForm_style.css">
 <!--<style>
    #message,#message1,#message2{
      color: red;
    }
    
  </style> -->
  <script src="../Controller/RegForm.js"></script>
</head>
<body>
<div class="container">
<h1 class="label">Registration Form</h1>

<P>&emsp;&emsp;&emsp; <a href="../view/login.php"> <i> <button style="color:white;background-color:red"> LOG IN </button> </i></a> </P>


<form class="login_form" name="formData" id="f1" action="../Controller/Formaction.php" method="post" 
onsubmit="return sendData(this);">

<p id="message"></p>

  <div class="font">Member Name</div>
  <input type="text" id="mname" name="mname"><br><br>
  
  <div class="font">Language</div>
  <input type="text" id="lname" name="lname"><br><br>

  <div class="font">User Name</div>
  <input type="text" id="uname" name="uname"><br><br>
  
  <div class="font">Password</div>
  <input type="password" name="pass" id="pass">
  <br>
  <p id="message1"></p>
  
  <p id="message2"></p>
  
  <button type="submit">Add Member</button>
</form>
<br><br><br>
</div>
</body>
</html>