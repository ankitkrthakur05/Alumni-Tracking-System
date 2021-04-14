<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/admin.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header" style="background-color:lightgrey;">
  <a href="#" class="logo">Alumni Tracking System</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
<div class="jumbotron">
<center>
  <h2>Search alumni</h2>
  <form class="example" action="adminback.php" style="margin:auto;max-width:50%" method="POST">
  <input type="text" placeholder="search name,rollnumber...." name="keyword" required="required">
  <button type="submit" name="search" value="search data"><i class="fa fa-search"></i></button>

</form>
</div>
<div class="main">
<div class="left" style="background-color:grey; width:30%; height:700px;">
<input type="submit" name="stu" value="Student" style="margin-left:25%; margin-top:60px; " ><br><br>
<input type="submit" name="clg" value="College" style="margin-left:25%; margin-top:20px;">
	
</div>
<div class="right" style="margin-left:400px;">
<input type="submit" value="No of college" name="noofcoll" >
<input type="submit"  value="No of Student" name="noofstu">
</div>
</div>
</body>
</html>
