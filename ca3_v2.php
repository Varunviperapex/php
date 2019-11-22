<?php
$arr = array(1,2,3,4,5);

$x=count($arr);
echo "count done";
echo "<br>";

$y=sort($arr);
echo "sort done";
echo "<br>";

$z=rsort($arr);
echo "reverse sort done";
echo "<br>";

$arr2 = array("A"=>"2","B"=>"1");
$a=asort($arr2);
echo "asort done";
echo "<br>";

foreach($arr2 as $n => $n_value)
{
	echo $n;
	echo $n_value;
}
echo "<br>";

$b=ksort($arr2);
echo "ksort done";
echo "<br>";

foreach($arr2 as $n => $n_value)
{
	echo $n;
	echo $n_value;
}

?>