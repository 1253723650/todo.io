<?php


$con = mysqli_connect('localhost','root','','hms'); 
if($con){
	
	$id=$_GET['id'];

	// sql to delete a record

	/*if (isset($_REQUEST['id']))
	{
		 $id = $_REQUEST['id'];
		 mysqli_query($con , "delete from todo where 'id=$id'");
	}
	else
	{
		echo "<h2>data does not deleted</h2>";
	}*/
	
	$query = "DELETE FROM todo WHERE id='$id'";
	if($con->query($query))
	{
		header('Location:http://localhost/todo/todaa.php');
	}
	else{
		echo "delete failed";
	}
	
	
}
else{
	echo "failed";
}



	
?>