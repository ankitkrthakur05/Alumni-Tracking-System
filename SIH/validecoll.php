<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "alumni";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
$login=$_POST['username']; 
$passwd=$_POST['password'];
if($login!=''&& $passwd!='')
{
 $query="select * from csign where cname='".$login."' and cpass='".$passwd."'";

 $result=mysqli_query($conn,$query); 

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['username']=$login;
       
		header("refresh: 0, url=collegepage.php");
     }
    else
    {
       header("refresh: 0,url=login1.php");
     }
 }
}
?>

 