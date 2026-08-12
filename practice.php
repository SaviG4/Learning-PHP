<?php

// ============================
// 1. VARIABLES AND ECHO
// ============================

// In PHP, all variables start with a dollar sign
$name = "Savi";
$age = 19;

// echo prints text to the screen
echo "Hello, " . $name . "!\n"; // the dot (.) joins strings together
echo "You are " . $age . " years old.\n";


// ============================
// 2. DATA TYPES
// ============================

$string_example  = "This is text";        // string
$int_example     = 42;                    // integer (whole number)
$float_example   = 3.14;                  // float (decimal number)
$bool_example    = true;                  // boolean (true or false)
$array_example   = ["apple", "banana", "cherry"]; // array (a list)

// gettype() tells you what type a variable is
echo "\n--- Data types ---\n";
echo gettype($string_example) . "\n";
echo gettype($int_example) . "\n";
echo gettype($float_example) . "\n";
echo gettype($bool_example) . "\n";
echo gettype($array_example) . "\n";


// ============================
// 3. OPERATORS
// ============================

echo "\n--- Operators ---\n";

$a = 10;
$b = 3;

echo $a + $b . "\n";   // addition       -> 13
echo $a - $b . "\n";   // subtraction    -> 7
echo $a * $b . "\n";   // multiplication -> 30
echo $a / $b . "\n";   // division       -> 3.333...

// String concatenation
$greeting = "Hi" . " " . "there!";
echo $greeting . "\n";

// Comparison
var_dump($a == 10);   // true, checks value
var_dump($a === "10"); // false, checks value AND type

?>
