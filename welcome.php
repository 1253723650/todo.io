<?php
$data= $_POST['name'];
$ttime=$_POST['time'];
$ddate=$_POST['date'];




$con = mysqli_connect('localhost','root','','hms'); 

$query = "INSERT INTO `todo`(`data`, `stime`, `sdate`) VALUES ('$data','$ttime','$ddate')";

$run = mysqli_query($con,$query);

if($run == TRUE)
{
	 header('Location:http://localhost/todo/first.php');
}
else
{
echo "<h2>data does not insert</h2>";
}		
?>