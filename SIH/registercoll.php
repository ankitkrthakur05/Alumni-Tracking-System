<?php 
include 'conn.php';

?>


<html>
	<head>
			<title> COLLEGE REGISTERATION </title>
			<link rel="stylesheet" type="text/css" href="css/registercoll.css">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
 <body>
 <nav class="navbar navbar-expand-sm bg-info navbar-dark" style="height:70px;background-color: rgb(69, 69, 137);">
 <div class="navbar-header">
  <a class="navbar-brand" style="font-weight:bold;">Alumni Tracking system</a>
</div>
  
  <ul class="navbar-nav" style="margin-left:40%;">
    <li class="nav-item">
      <a class="nav-link"  style=" color:white;font-weight:bold;" href="main.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="margin-left:10px; width:160px; color:black; font-weight:bold;" href="registerstu.php">Register As Student</a>
    </li>
	<li class="nav-item" >
      <a class="nav-link"  style="margin-left:50px; width:160px;font-weight:bold; color:black;"href="#">Help & Support</a>
    </li>
     
    </li>
  </ul>
</nav>

	<div class="main">
		<div class="title">
        <h1> Registration Form For College</h1>
		
		</div>
		<div class="form">
				<form method="post" action="inputclg.php">
					<label><font color="white" size="4px" >Name of College </font></label>
						<input type="text" name="collegename" id="collegename" placeholder="Enter the name of college" required><br><br>
					<label><font color="white" size="4px" > Mobile Number</font> </label>
						<select id="ph" name="id">
							<option value="+91">+91</option>
							<option value="+94">+94</option>	
							<option value="+89">+89</option>
							<option value="+99">+99</option>	
							<option value="+92">+92</option> 
							<option value="+67">+67</option>	
						</select>						 
							<input type="number" name="collegenumber" id="collegenumber" placeholder="Enter the no. of college"><br><br>
					<label> <font color="white" size="4px" >Enter Your Password </font></label>
							<input type="password" name="collegepass" id="collegepassword" placeholder="Enter the password of college"><br><br>
					<label><font color="white" size="4px" > Re-Enter Your Password </font></label>
							<input type="password" name="recollegepass" id="recollegepassword" placeholder="Enter the password of college"><br><br>
					<label><font color="white" size="4px" > Board of College</font> </label>
						<select id="board" name="board">
							<option> PTU </option>  
							<option> HPTU </option>  
							<option> DTE Goa </option>  
							<option> DTU </option>  
							<option> CU </option>
						</select><br><br>
					<label><font color="white" size="4px" > Address of College </font></label>
					<input type="text" name="collegeaddress" id="collegeaddress" placeholder="Enter the address of college"><br><br>
					<label><font color="white" size="4px" > Email </font></label>
					<input type="text" name="mail" id="mail" placeholder="Email"><br><br>
					<label><font color="white" size="4px" > College Authority Application </font> </label>	
					<font color="white">
					<br><br><br><br>
					<input type="submit" name="submit1" value="Sign up">
					
		
				</form>
		</div>		
</div>
</body>
</html>
				
				
				
		               
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		  