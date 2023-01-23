<?php

// $fruits = ['apple','banana','orange'];

// get array length
// echo count($fruits);

// search  array
// echo in_array('banana', $fruits);
// var_dump(in_array('banana', $fruits));

// $fruits[] = 'grapes'; // add to the end
// array_push($fruits, 'mango', 'raspberry'); // add to end using push
// array_unshift($fruits, 'kiwi'); // add to the beginning
// print_r($fruits);

// remove from an array
// array_pop($fruits); // remove last el in array - raspberry
// array_shift($fruits); // remove first el in array - kiwi

// remove specific el
// unset($fruits[2]); // remove orange
// print_r($fruits);

// $chunkedArray = array_chunk($fruits, 2);
// print_r($chunkedArray);

// Concatenate arrays
// $arr1 = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 = array_merge($arr1, $arr2);
// print_r($arr3);
// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//combine arrays (keys and values)
// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banana'];
// $c = array_combine($a, $b);
// print_r($c);

//Array of keys
// $key = array_keys($c);
// print_r($key);

//flip keys with values
// $flipped = array_flip($c);
// print_r($flipped);

// Create an array of numbers with range
$numbers = range(1,10);
print_r($numbers);

// Map thru array and create a new one

// $newNumbers = array_map(function ($number) {
//    return "Number $number";
// }, $numbers);
// print_r($newNumbers);

// Filter array 
// $lessThan5 = array_filter($numbers, fn($number) => $number <= 5);
// print_r($lessThan5);

// Array reduuce
// carry holds the return value of the prev iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);

