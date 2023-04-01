<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="RegForm_style.css">
  <script src="../Controller/problemForm.js"></script>
</head>
<a href="Logout.php"><button type="button" style="background-color:#ff1a1a;">LOGOUT</button></a><br>
<a href="home.php"><button type="button">Home</button></a>
<body>

<form class="login_form" name="problemData" id="f1" action="../Controller/problemaction.php" method="post" onsubmit="return pendData(this);">
 <div class="font">Problem setter id</div>
  <input type="text"  name="pid"><br><br>
  
  <div class="font">category id</div>
  <input type="text"  name="cid"><br><br>

  <div class="font">Volume No</div>
  <input type="text"  name="vno"><br><br>
  
  <div class="font">Problem name</div>
  <input type="text" name="pname">
  <br>
  <p id="m2"></p>
  
  <button type="submit">Add problem</button>
</form>
<br><br><br>
</div>
</body>
</html>