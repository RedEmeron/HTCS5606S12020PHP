<?php

$greeting = "hello";
$who = "david";

echo $greeting;
echo $who;

echo "<h1>".$greeting." ".$who."</h1>";

$x = 4;
$y = 5;
echo "x =".$x;
echo "y =".$y;
echo "z = x + y = ".($x + $y);

$greeting = "Hello world";
//length of string
echo "<br>".strlen($greeting)." string length<br>";
//word count -- count number of words in that string
echo str_word_count($greeting)." string word count<br>";
//string reverse
echo strrev($greeting)." string reverse<br>";
//word string position
echo strpos($greeting,"Hello")."word position<br>";
//string replace
echo str_replace($greeting, "Hello","byebye")." word replace<br>";
//to uppercase
echo strtoupper($greeting)."string to upper case<br>";
//to lower
echo strtolower($greeting)." To lower case<br>";

