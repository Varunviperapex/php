<?php
$c1 = mysqli_connect("localhost","root","","dbsc");
$q = "create table student3(Name varchar(20), roll integer(4))";
$q1 = "insert into student3 values('Ramesh', 0001),('Rit', 0002),('Rat', 0003),('Rht', 0004),('Rt', 0005),('Rait', 0006),('a', 0007),('b', 0008),('c', 0009),('d', 0010)";
mysqli_query($c1,$q);
mysqli_query($c1,$q1);
mysqli_close($c1);
?>


<?php
$c1 = mysqli_connect("localhost","root","","dbsc");
$q = "create table student2(Name varchar(20), roll integer(4))";
$q1 = "insert into student2 values('Rahit', 0001)";
$q2 = "insert into student2 values('Rit', 0002)";
$q3 = "insert into student2 values('Rat', 0003)";
$q4 = "insert into student2 values('Rht', 0004)";
$q5 = "insert into student2 values('Rt', 0005)";
$q6 = "insert into student2 values('Rait', 0006)";
$q7 = "insert into student2 values('a', 0007)";
$q8 = "insert into student2 values('b', 0008)";
$q9 = "insert into student2 values('c', 0009)";
$q10 = "insert into student2 values('d', 0010)";
mysqli_query($c1,$q);
mysqli_query($c1,$q1);
mysqli_query($c1,$q2);
mysqli_query($c1,$q3);
mysqli_query($c1,$q4);
mysqli_query($c1,$q5);
mysqli_query($c1,$q6);
mysqli_query($c1,$q7);
mysqli_query($c1,$q8);
mysqli_query($c1,$q9);
mysqli_query($c1,$q10);
mysqli_close($c1);
?>