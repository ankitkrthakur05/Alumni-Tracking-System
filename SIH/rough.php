<?php 
include 'conn.php';

?>


<html>
	<head>
			<title> COLLEGE REGISTERATION </title>
			<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/rough.css">			
	</head>
 <body>
 <header>
		<ul>
			
			
			<li><a href ="#">About</a></li>
			<li><a href ="#">Help & Support</a></li>
			
		</li>
			<li class="active"><a href ="index.php">Home</a></li>
		</ul>
		
</header>
	<div class="main">
		<div class="title">
        <h1> Registration Form For College</h1>
		<h2>Register Here</h2>
		</div>
		<div class="form">
				<form method="post" id="register" action="">
					<label><font color="white" size="4px" >Name of College </font></label>
						<input type="text" name="college name" id="collegename" placeholder="Enter the name of college"><br><br>
					<label><font color="white" size="4px" > Mobile Number</font> </label>
						<select id="ph">
							<option>+91</option>
							<option>+94</option>	
							<option>+89</option>
							<option>+99</option>	
							<option>+92</option> 
							<option>+67</option>	
						</select>						 
							<input type="number" name="college number" id="collegenumber" placeholder="Enter the no. of college"><br><br>
					<label> <font color="white" size="4px" >Enter Your Password </font></label>
							<input type="password" name="college password" id="collegepassword" placeholder="Enter the password of college"><br><br>
					<label><font color="white" size="4px" > Re-Enter Your Password </font></label>
							<input type="password" name="college password" id="collegepassword" placeholder="Enter the password of college"><br><br>
					<label><font color="white" size="4px" > Board of College</font> </label>
						<select id="board">
							<option> PTU </option>  
							<option> HPTU </option>  
							<option> DTE Goa </option>  
							<option> DTU </option>  
							<option> CU </option>
						</select><br><br>
					<label><font color="white" size="4px" > Address of College </font></label>
							<input type="text" name="college address" id="collegeaddress" placeholder="Enter the address of college"><br><br>
					<label><font color="white" size="4px" > College Authority Application </font> </label>	
					<font color="white"><div class="image-upload-wrap">
					<input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/""/><br><br>
					<div class="file-upload-content">
							<img class="file-upload-image" src="0" alt="your image" />
						<div class="image-title-wrap">
						</div>
					</div>	
					<div class="button">
					<center><input type="submit" value="Submit" id="submit"><center>
		</div>
				</form>
		</div>		
</div>
</body>
</html>
				
				
				
		               
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		  