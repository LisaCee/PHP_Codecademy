<?php
// while
$count = 1;
while ($count <= 100) {
  if ($count % 33 === 0) {
    print $count . " is divisible by 33\n";
    $count += 1;
  } else {
    $count += 1;
  }
 
}

// do while
//   $plant_height = 32;
// do {
//   echo "The plant is " .$plant_height . " tall.\n";
//   $plant_height += 1;
// } while ($plant_height <= 30);

// if ($plant_height >= 30) {
//   echo "And can produce fruit.";
// };


// for
//   for ($i = 10; $i >= 0; $i -= 1){
//     if ($i == 2) {
//       echo "Ready!\n";
//     } elseif($i == 1) {
//       echo "Set!\n";
//     } elseif($i == 0) {
//       echo "Go!\n";
//     } else {
//           echo $i . "\n";
//     }

//   }

// foreach
// $scores = [
//   "Alice" => 99,
//   "Bob" => 95,
//   "Charlie" => 98,
//   "Destiny" => 91,
//   "Edward" => 88
// ];

// foreach ($scores as $name => $score) {
//   echo $name ." received a score of " . $score . ".\n";
// }

// break and continue
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
    } elseif ($i === 1) {
      echo "Set!\n";
      break;
    } elseif ($i === 0) {
      echo "Go!\n";
    } elseif ($i === 6) {
      continue;
    } else {
      echo $i . "\n";
    }
  }