<?php
function mypower($num, $pow)
{
	$result = $num;
	for($i = 0; $i < $pow-1; $i++)
	{
		
		$result = $result * $num;
		
	}
	
	return $result;
}
$number = $_GET["number"];
$power = $_GET["power"];
echo $number . " raised to the power " . $power . " is equal to " . mypower($number, $power);
?>