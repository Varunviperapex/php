<?php
// ARRAY FUNCTION.........


$input=array("php",4.0,"green","red");
$reversed=array_reverse($input);
print_r($input);
print_r($reversed);
echo "<br>";

$array1=array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapozoid",4);
$result=array_merge($array1,$array2);
print_r($result);
echo "<br>";

$input=array("apple","orange","pears");
$flipped=array_flip($input);
print_r($flipped);
echo "<br>";


$stack=array("orange","banana","apple","rasberry");
$fruit=array_shift($stack);
print_r($stack);
echo $fruit;
echo "<br>";


$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
echo "<br>";


$input=array("a","b","c","d","e");
$output=array_slice($input,2); //returns"c","d","e"
$output=array_slice($input,0,3); //returns "a","b","c"
print_r($output);
echo "<br>";


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
echo "<br>";
 


$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
echo "<br>";

$stack=array("orange","banana","apple","rasberry");
$fruit=array_pop($stack);
print_r($stack);
echo "<br>";

$stack=array("orange","banana");
array_push($stack,"apple","rasberry");
print_r($stack);
echo "<br>";
?>

