<?php
include'conn.php';
?>
<!DOCTYPE html>
<html>
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
    content="width=device-width,initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
     <div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <ul>
    <li><a href="login.php"><button>Home</button></a></li>
    <li><a href="#"><button>My Profile</button></a></li>
    <li><a href="#"><button>Notifications</button></a></li>
    <li><a href="#"><button>About</button></a></li>
  </ul>
</div>
    <nav id="mainNav">
        <div class="logo">
            <a href="#">
                <img src="logo.png" alt="shadow_007_crew LOGO">
            </a>
        </div>
        <ul>
            
            <li><a href="#"> My Profile </a></li>
            <li><a href="#"> Notifications </a></li>
            <li><a href="#"> Services </a></li>
            <li><a href="#"> About </a></li>
        </ul>
    </nav>
    
    <section>
<div class="notic">
<div class="corners">
<center><h2>NOTICE</h2></center>
<?php
$sql = "SELECT content, position FROM notice";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th> </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
      {
      echo '<tr>';
        
        echo '<td>-> ' .$row['content'].' </td>';  ?>
       
        
        
        
        
        
        <?php '</td>';
      echo '<tr>';
      }
    
    echo "</table>";
} else {
    echo "0 results";
}
?></section>
    <section>Section 2</section>
    <section>Section 3</section>
    
    <footer>This website is designed by shadow_007_crew</footer>
    
    <script src="main.js"></script>
</body>
   

</html>