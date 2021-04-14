<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

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
</body>
</html>