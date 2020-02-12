<?php
// Write your code below:

//defining functions
// function praisePHP() {
//   echo "PHP is the best language";
// }

// praisePHP();
  
// invoking functions
// function inflateEgo() {
//     echo "You are awesome";
//   }
 
//   inflateEgo();
//   inflateEgo();

//return statements
// Write your code below:
// function printStringReturnNumber() {
//     // echo "This is a number:";
//     return 2;
//   };
  
//   $my_num = printStringReturnNumber();
  
//   echo $my_num;

// function notFound()
// {
  
//   echo "ERROR: Page not found!\n";
//   return 404;
// }

// function greetLearner()
// {
  
//   echo "Hello, Learner!\n";
//   echo "I hope you're (still) enjoying PHP!\n";
//   echo "Love, Codecademy\n";
//   return "<3";
// }

// // Don't change the code below:

// $error = notFound(); 
// $heart = greetLearner();

// echo "I received a $error, but it's ok because I also received $heart.";
    
// return values
// function first()
// {
//   return "You did it!\n";
// }

// function second()
// {
//   return "You're amazing!\n";
// }

// function third()
// {
//   return "You're a coding hero!\n";
// }

// // Write your code below:
// echo first() . second() . third();

// null
// function createVacuum() {
//     echo "Candy";
//   }  
// echo createVacuum() * 10;

// parameters
// function increaseEnthusiasm($string) {
//     return "{$string}!";
//   }
    
//   echo increaseEnthusiasm("Lisa");
  
//   function repeatThreeTimes($string) {
//     return "{$string}{$string}{$string}";
//   }
  
//   echo repeatThreeTimes("Hi");
  
//   echo increaseEnthusiasm(repeatThreeTimes("POW"));

// function calculateArea($height, $width) {
//     return $height * $width;
//   }
  
//   echo calculateArea(5, 1);
  
//   function calculateVolume($height, $width, $depth) {
//     return $height * $width * $depth;
//   }
  
//   echo calculateVolume(1, 2, 3);

// default parameters
// function calculateTip($cost, $tip_percent = 20) {
//     return $cost + ($cost * $tip_percent / 100);
//   }
  
//   echo calculateTip(100, 15);
//   echo calculateTip(15);

// pass by reference
// $string_one = "you have teeth";
// $string_two = "toads are nice";
// $string_three = "brown is my favorite color";

// // Write your code below:
// function convertToQuestion(&$var) {
//   $var = "Do you think " . $var ."?\n";
//   echo $var;
// }

// echo convertToQuestion($string_one);
// echo convertToQuestion($string_two);
// echo convertToQuestion($string_three);

// echo $string_one . $string_two . $string_three;

// scope
$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);