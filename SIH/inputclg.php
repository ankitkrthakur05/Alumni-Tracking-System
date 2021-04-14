<?php
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$db="alumni";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		
	}

	
	if(isset($_POST['submit1']))
	{
	$name=$_POST['collegename'];
	$id=$_POST['id'];
	$num=$_POST['collegenumber'];
	$pass=$_POST['collegepass'];
	$repass=$_POST['recollegepass'];
	$board=$_POST['board'];
	$collegeadress=$_POST['collegeaddress'];
	$mail=$_POST['mail'];
	$sql="INSERT INTO csign (cname, cphone , cpin , cpass , crepass , cboard , caddress , cmail) 
		VALUES('$name',' $num ', '$id', '$pass ','$repass' , '$board',' $collegeadress' ,'$mail')";
	$r=mysqli_query($conn,$sql);
	if($r>0){
	echo "inserted";
	header("refresh: 0; url=main.php");
	} 
	else{
	echo "not inserted";
	}
	}
	?>