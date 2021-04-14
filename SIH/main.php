<?php
include 'conn.php';
?>
<html>
<head>
<title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="height:70px;padding-top:10px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ALUMNI TRACKING SYSTEM</a>
    </div>
    <ul class="nav navbar-nav" style="float:right;">
      <li class="active" style="padding-right:20px"><a href="login.php">Home</a></li>
      <li class="dropdown" style="padding-right:20px"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SIGN-UP<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="registerstu.php">REGISTER AS ALUMNI</a></li>
          <li><a href="registercoll.php">REGISTER AS COLLEGE</a></li>
        </ul>
      </li>
      <li style="padding-right:20px"><a href="#">ABOUT</a></li>
      <li style="padding-right:20px"><a href="#">HELP & SUPPORT</a></li>
    </ul>
  </div>
</nav>
	
	    <div class="main">

	    
		</header>
	<div class="title">
		<h1>Hi Alumni </h1>
		<h4>Welcome please Sign in to access your account..</h4>
	</div>
	<div class="login">
	<div class="button1">
<a href="login.php"><button  class="button11"><font color="black">Student Login</button></a>

	</div>
	<div class="button2">
	<a href="login2.php"><button  class="button22"><font color="black">COLLEGE Login</button></a>
	</div>
	</div>
	</div>
	<footer>
	</footer>
		
</body>
</html>
 
