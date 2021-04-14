<?php
include 'conn.php';
?>
<html>
<head>
<title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="height:70px;padding-top:10px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">ALUMNI TRACKING SYSTEM</a>
    </div>
    <ul class="nav navbar-nav" style="float:right;">
      <li class="active" style="padding-right:20px"><a href="main.php">Home</a></li>
      <li class="dropdown" style="padding-right:20px"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SIGN-UP<span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="registercoll.php">REGISTER AS COLLEGE</a></li>
        </ul>
      </li>
      <li style="padding-right:20px"><a href="#">ABOUT</a></li>
      <li style="padding-right:20px"><a href="#">HELP & SUPPORT</a></li>
    </ul>
  </div>
</nav>
	
	

	    
		

	
	<div class="login">
		<div class="next">
		<h1> College Login </h1>
		<form  action="validecoll.php" method="POST">
		<input type ="text" placeholder="User Name" name="username" required><br><br>
		<input type ="password" placeholder="Password" name="password" required><br><br>
		<center><input type="submit"  name="submit" value="Sign In"></center>
		</form>
		</div>
	</div>


	
	
	<footer>
	</footer>
		
</body>
</html>
 
