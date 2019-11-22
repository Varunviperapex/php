<?php  
$n = 214;  
$rn = 0;  
while ($n > 1)  
{  
$r = $n % 10;  
$rn = ($rn * 10) + $r;  
$n = ($n / 10);   
}  
echo "Reverse is $rn";  
?>  