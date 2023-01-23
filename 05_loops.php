<?php

/* -------- Loops & Iteration ------- */
/* ------------ For Loop ------------ */
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number: $x <br>";
// }

/* ------------While Loops------------ */
/* 
** While Loop Syntax while (condition) {
   // code to be executed
   // increment
} 
*/
// $x = 0;

// while ($x <= 5) {
//    echo "Number: $x <br>";
//    $x++;
// }

/* --------------Do While--------------- */
/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
// $x = 1;

// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $posts = ['First Post','Second Post','Third Post'];

// For 
// for ($x = 0; $x < count($posts); $x++) {
//    echo "$posts[$x] <br>";
// }

// For Each
// foreach ($posts as $value) {
//   echo "$value <br>";
// }

// $persons = [
//    'f_name' => 'Ryan',
//    'l_name' => 'Azur',
//     'age' => 41
// ];

// $age = [
//    "Peter" => "35", 
//    "Ben" => "37", 
//    "Joe" => "43"
// ];

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }




