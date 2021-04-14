<?php

//notice upload
if(isset($_REQUEST['upload'])){
  $a=$_POST['textfield'];
  $q="INSERT INTO notice (content) VALUES('$a')";
  $r=mysqli_query($conn,$q);
	if($r)
	{
		
	}
	else{
		echo "not inserted";
	}
}

//notice display



?>