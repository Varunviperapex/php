<?php  
$n=12;
$rn = 0;  
function rev($n)
{
	while ($n > 1)  
	{  
	$r = $n % 10;  
	$rn = ($rn * 10) + $r;  
	$n = ($n / 10);   
	return $n;
	}  

	echo(rev($n)."<br>");
	echo $n;
}
?>  