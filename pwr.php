<?php
$n=16;
$x=0;
function pwr(&$n)
{
	$x=$n*$n;
	return $x;
}
pwr($n);
echo(pwr($n));
?>
