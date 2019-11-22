<?php
$a="This is good";
$b="Tensorflow installation is troublesome";
echo strcmp("Hello world!","Bello world!")."<br>"; 
echo str_word_count("By the order of the peaky blinders!")."<br>";
echo str_replace("bad","good" ,$a)."<br>";
echo str_ireplace("are","is","How ARE you")."<br>";//$searchVal,$replaceVal,$subjectVal//
echo strlen($a)."<br>";
echo strcasecmp("Hello world!","Hello world!")."<br>";
echo strtoupper($a)."<br>";
echo strtolower($a)."<br>";
echo ucfirst("what you doing?")."<br>";
echo ucwords($a)."<br>";
echo ltrim($a,"This")."<br>"; 
echo rtrim($a,"good")."<br>";
echo trim($a,"T")."<br>";
echo strrev($a)."<br>";
echo strpos("PHP class PHP","PHP")."<br>";//case sesitive
echo stripos("PHP class PHP","PHP")."<br>";//case insesitive
echo substr("Hello BCA",5)."<br>";//returns substring 
define("GREETING","Hello you! How are you today?");
echo constant("GREETING");

?>