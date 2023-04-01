<!DOCTYPE html>  
<html>  
<head>
</head>
<body>   
<head>
  <link rel="stylesheet" href="RegForm_style.css">
</head>
<a href="Logout.php"><button type="button" style="background-color:#ff1a1a;">LOGOUT</button></a><br>
<a href="home.php"><button type="button">Home</button></a>
<body>

<form class="login_form" name="FormData" id="f1" action="../Controller/submitaction.php" method="post">
 <div class="font">Problem id</div>
  <input type="text"  name="pid"><br><br>

  <div class="font">Answer</div>
  <input type="text" name="ans">
  <br>
  <p id="m2"></p>
  
  <button type="submit">Submit</button>
</form>
<br><br><br>
</div>
</body>  
</html>  