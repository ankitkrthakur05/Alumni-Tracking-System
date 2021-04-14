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
$login=$_POST['uname'];
$passwd=$_POST['pass'];
if($login!=''&& $passwd!='')
{
 $query="select * from ssign where srnumb='".$login."' and spass='".$passwd."'";

 $result=mysqli_query($conn,$query); 

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['uname']=$login;
        echo "welcome to php";
     }
    else
    {
       echo'You entered username or password is incorrect';
     }
 }
}
?>
<html>
  <body>
    <form action="login3.php" method="post">
      Username:<br>
      <input type="text" name="username"><br>
      Password:<br>
      <input type="PASSWORD" name="passwd">
      <BR>
      <intput type="submit" value="login" name="submit"><INPUT Type="submit  "value="reset">
    </form> 
  </body>
</html>