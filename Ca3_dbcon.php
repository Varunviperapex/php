<?php 
	$con=mysqli_connect("localhost","root","","cadb");
	$q1="insert into details values('Rakesh')";
		if(mysqli_query($con,$q1))
	{
	echo "entry found";
	}
	else
	{
	echo "Entry not found";
	}
	mysqli_close($con);
?>