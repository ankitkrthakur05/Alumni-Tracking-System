<?php
 include 'config.php'; 

   if(isset($_GET['delete'])){
       $position=$_GET['delete'];
       mysqli_query("DELETE  FROM notice WHERE position=$position");
header("Location: collegelogin.php");
   }
 ?>