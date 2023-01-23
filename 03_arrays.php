<?php
/* ---Arrays----- */

/* Arrays hold multiple values. Each value in an arrays is called an "element" */

//Simple array of numbers
$numbers = [1,2,3,4,5];
$fruits = ['apple', 'orange', 'banana'];

// echo $numbers[0];
// var_dump($numbers);
// echo $fruits[1];
// echo $numbers[2] + $numbers[3];

// Associative Arrays 
/* Allows us to use named keys to identify values (key-value pair)*/

// $colors =[
//    1 => 'red',
//    2 => 'green',
//    3 => 'blue',
//    4 => 'yellow',
// ];

// echo $colors[3];

// Strings as keys
$hex = [
   'red' => '#f00',
   'green' => '#0f0',
   'blue' => '#00f',
];

// echo $hex['red'];
// var_dump($hex);

// Multi-dimensional arrays

// Single Person
// $person = [
//    'f_name' => "Ryan",
//    'l_name' => 'Azur',
//    'email' => 'razur@email.com'
// ];

// echo $person['f_name'];

// Multi-dimensional arrays
$people = [
   [
      'f_name' => "Ryan",
      'l_name' => 'Azur',
      'email' => 'razur@email.com'
   ],
   [
      'f_name' => "Juan",
      'l_name' => 'de la Cruz',
      'email' => 'juan@email.com'
   ],
   [
      'f_name' => "Maria",
      'l_name' => 'Clara',
      'email' => 'maria@email.com'
   ]
   ];

echo $people[2]['l_name'];

// Encode JSON
var_dump(json_encode($people));

// // Decode to JSON
$jsonobj = '{"f_name":"Juan","l_name":"de la Cruz","email":"juan@email.com"}';
var_dump(json_decode($jsonobj));

