<?php
$arr = array(1,2,3,4,5);

$x=count($arr);
echo $x;
echo "<br>";

$y=sort($arr);
echo $y;
echo "<br>";

$z=rsort($arr);
echo $z;
echo "<br>";

$arr2 = array("A"=>"2","B"=>"1");

$a=asort($arr2);
echo $a;
echo "<br>";



$b=ksort($arr2);
echo $b;
echo "<br>";


?>