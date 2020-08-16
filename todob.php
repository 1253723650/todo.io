<html>
<head><h1><i><center>
 <link rel="stylesheet" href="http://localhost/todo/nav.php" type="text/css">
</head>

 <body style="background-image: url('');">

<div class="topnav" id="myTopnav">
  
  <a href="" style="margin-left:45%">TODOs</a>
  
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a> 
</div>

</body>
</html>

<?php
$con = mysqli_connect('localhost','root','','hms');

function showData() {
global  $con;
$query ="SELECT * FROM `todo` ";
$run = mysqli_query($con,$query);
if($run == TRUE) {
	?>
	 
	<table border="2" width="80%" style="color:red">
	<tr style="color:black"><td><b><i>ID</td>
	<td><b><i>Data</td>
	<td><b><i>Time</td>
	<td><b><i>Date</td>
	
	<?php
	while($data = mysqli_fetch_assoc($run)) {
?>
  
<tr><td style="color:black"> <?php  echo $data['id']; ?>  </td>
 <td> <?php  echo $data['data']; ?>  </td>
 <td> <?php  echo $data['stime']; ?>  </td>
 <td> <?php  echo $data['sdate']; ?>  </td>

</tr>
<?php

}
?></table></body> <?php
}
else 
{
	echo "does not";
}



}
?>


<html>
<head><center><b><i>Your Todos</head>
<body>
<?php showData() ?>



</body>
</html>