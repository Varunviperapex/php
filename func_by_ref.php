<?php 
//call by reference//
function  increment(&$num)
{
	$num = $num + 1;
	return $num;
}
$n=1;
echo(increment($n)."<br>");
	echo $n;
?>