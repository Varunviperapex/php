<?php

$n=18;

$x=function($n)
 {
  $f1 = 0;
  $f2 = 1;
  echo $f1.' '.$f2.' ';
 
  for($i = 2; $i < $n; $i++)
  {
    $fibo = $f1 + $f2;
    $f1 = $f2;
    $f2 = $fibo;
	echo $fibo.', ';
  }
 };
 
echo $x;
?>