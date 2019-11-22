<?php

'$con=mysqli_connect("localhost","root","","dbsc");
	$q1="Create table student1(Name varchar(20),Roll integer(4))";
		if(mysqli_query($con,$q1))
	{
	echo "Table created";
	}
	else{
	echo "table not created";
	}
	mysqli_close($con);'
 $ca1=20;
 $ca2=15;
 $ca3=30;
 
 $sum=(($ca1+$ca2+$ca3)-15);
 $tot=($sum/60)*100;
 echo $tot;
?>