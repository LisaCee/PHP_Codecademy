<?php
namespace Codecademy;
// function duckDuckGoose($is_goose) {
//   return $is_goose !== TRUE ? "duck" : "goose!";
// }

// echo duckDuckGoose(TRUE);
// echo duckDuckGoose(FALSE);
// echo duckDuckGoose('purple'); 

$banana_cream = ["whole milk", "sugar", "cornstarch", "salt", "egg yolks", "butter", "vanilla extract", "bananas", "heavy cream", "powdered sugar"];
$experimental_pie = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];

// Write your code below:
function eatPie($foods) {
  if (in_array("chicken", $foods) xor in_array("bananas", $foods)) {
    return "Delicious pie!";
  } else {
    return "Disgusting!";
  } 
}

echo eatPie(["candy", "chicken"]);