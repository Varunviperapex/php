<?php 
	$con=mysqli_connect("localhost","root","","sitedb");
	$q1="Create table products_catalogue(product_name varchar(20),product_id integer(4),price integer(20),description varchar(25))";
		if(mysqli_query($con,$q1))
	{
	echo "Table created";
	}
	else{
	echo "table not created";
	}
	mysqli_close($con);
?>