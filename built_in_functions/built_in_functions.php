<?php
namespace Codecademy;

$first = "Welcome to the magical world of built-in functions.";
  
$second = 82137012983; 

//Write your code below:
echo gettype($first);
echo gettype($second);

echo var_dump($first);
echo var_dump($second);

<?php
namespace Codecademy;

// Write your code below:
echo(strrev(".pu ti peeK .taerg gniod er'uoY"));

echo(strtolower("SOON, tHiS WILL Look NoRmAL."));

echo(str_repeat("\nThere's no place like home.\n", 3));

<?php
namespace Codecademy;

$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
  
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";  

// Write your code below:
echo substr_count($essay_one, "really");

echo substr_count($essay_two, "obvious");

<?php
namespace Codecademy;

// Write your code below:

function calculateDistance($a, $b) {
  return abs($a - $b);
}

echo calculateDistance(-1, 4);

function calculateTip($cost) {
  return round($cost + $cost * 0.18);
}

echo calculateTip(100);

<?php
namespace Codecademy;

// Write your code below:
echo getrandMax();
echo "\n";
echo rand();
echo "\n";
echo rand(1, 52);

<?php
namespace Codecademy;

$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

// Write your code below:
echo str_pad($b, $a ,$d, $c);

<?php
namespace Codecademy;

// Write your code below:
function convertToShout($str) {
  return strtoupper($str) . "!";
}

echo convertToShout("woah there, buddy");

function tipGenerously($cost) {
  return ceil($cost + $cost * 0.2);
}

echo tipGenerously(100.00);

function calculateCircleArea($diameter) {
  return pi()/4 * pow($diameter, 2) ;
}
echo "\n";
echo calculateCircleArea(25);
