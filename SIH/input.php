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

	if(isset($_POST['submit']))
	{
	$name= $_POST['name'];
	$fname= $_POST['fname'];
	$mname= $_POST['mname'];
	$pwd= $_POST['pwd'];
	$date= $_POST['date'];
	$month= $_POST['month'];
	$year= $_POST['year'];
	$rollno= $_POST['rollno'];
	$from=$_POST['from'];
 	$to= $_POST['to'];
	$scname= $_POST['cname'];
	$phone= $_POST['phone'];
	$place= $_POST['place'];
	$gmail= $_POST['gmail'];
 $sql="INSERT INTO ssign (sname, sfname , smname , spass , sdate , smonth , syear , srnumb , sbf , sbt , scname ,sphone , splace , smail) 
 VALUES('$name',' $fname', '$mname', '$pwd','$date' , '$month', '$year','$rollno' ,'$from', '$to','$scname','$phone' ,'$place' ,'$gmail')";
	$r=mysqli_query($conn,$sql);
	if($r>0){
		echo "inserted";
		
		header("refresh: 0; url=main.php");
	
	}
	else{
	
	}
}
 ?>