<?php 
	$c1=mysqli_connect("localhost","root","");
		if(!$c1)
		die("not connected");
		echo "connected";
	
		$q="Create database siteDB";
		if(mysqli_query($c1,$q))
	{
	echo "Database created";
	}
	else
	{
	echo "database not created";
	}
	mysqli_close($c1);
?>