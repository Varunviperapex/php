<html>
<body>
<?php
$name=$_POST['n1'];
$pwd=$_POST['n2'];
$add=$_POST['n3'];
$phnno=$_POST['n4'];
$email=$_POST['n5'];
$con=mysqli_connect("localhost","root","","sitedb");
$q1="insert into cust_detail (name,password,address,phoneno,email) values('$name','$pwd','$add','$phnno','$email')";
		if(mysqli_query($con,$q1))
	{
	echo "Data inserted";
	}
	else
	{
	echo "Data not inserted";
	}
	mysqli_close($con);

?>
</html>
</body>