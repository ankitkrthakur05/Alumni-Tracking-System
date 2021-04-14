<?php include 'conn.php'?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/tl.css" type="text/css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<title>
College's Login
</title>
<body>

<?php
include 'server.php';
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">dashboard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li></li>
      <li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
<center>
  <h2>search alumni</h2>
  <form class="example" action="#" style="margin:auto;max-width:50%" method="POST">
  <input type="text" placeholder="search name,rollnumber...." name="keyword" required="required">
  <button type="submit" name="search" value="search data"><i class="fa fa-search"></i></button>

</form>
</div>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<center><h2>Result</h2></center>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		
		$query = mysqli_query($conn, "SELECT * FROM `ssign` WHERE `sname` LIKE '%$keyword%' OR `srnumb` LIKE '%$keyword%' ") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
	<table border="2px" cellspacing="0" align="center" width="900px">
  <tr>
						<th class="td1"><CENTER>NAME</center></th>
						<th class="td1"><CENTER>ROLL NUMBER</center></th>
						<th class="td1"><CENTER>FATHER'S NAME</center></th>
            <th class="td1"><CENTER>MOTHER'S NAME</center></th>
            <th class="td1"><CENTER>CURRENTLY WORKING</center></th>
            <th class="td1"><CENTER>BATCH FROM</center></th>
            <th class="td1"><CENTER>BATCH TO</center></th>
            <th class="td1"><CENTER>EMAIL</center></th>
					</tr>
  <tr>
						<td class="td1"><center><?php echo $fetch['sname']?></center></td>
						<td class="td1"><center><?php echo $fetch['srnumb']?></center></td>
						<td class="td1"><center><?php echo $fetch['sfname']?></center></td>
            <td class="td1"><center><?php echo $fetch['smname']?></center></td>
            <td class="td1"><center><?php echo $fetch['splace']?></center></td>
            <td class="td1"><center><?php echo $fetch['sbf']?></center></td>
            <td class="td1"><center><?php echo $fetch['sbt']?></center></td>
            <td class="td1"><center><?php echo $fetch['smail']?></center></td>
					
          </tr>
          
				</table>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>

</center>
  
</div>
  
<p></p>


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
       <?php echo '<td> ';?> 
        
        
        <a href= "delete.php?delete="<?php echo $row['position'];?>
         class="btn btn-danger">DELETE</a>
        
        
        
        
        
        <?php '</td>';
      echo '<tr>';
      }
    
    echo "</table>";
} else {
    echo "0 results";
}
?>

</div>
  <div class="demo"><center>
  <h2>
  <p>write the notice here:</p></h2>
  </center>
  <form  action="#" method="POST">
    <div class="form-group">
      
      <textarea class="form-control" required rows="5" id="comment" name="textfield" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block" id="upload" name="upload" >upload </button>
	        <input type="text" name="number" placeholder="enter number"/>
  </form>  
  <div class="container">
      <div class="checkbox">


      </div>



</div>
</div>


</div>
</body>
</html>
<?php
if(isset($_POST['upload'])){
    $number=$_POST['number'];
    $text=$_POST['textfield'];
}
//post
$url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode("message-text");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=8OLZYIXZYUF492EO8BQKY7XT8KU4F3SN&secret=LPTGT5R29K68ZJ3Z&usetype=stage&phone=$number&senderid=eric03tenision@gmail.com&message=$text");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;
?>