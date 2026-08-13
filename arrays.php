<?php
    $foods = array("apple", "orange", "banana", "coconut");

    //$foods[0] = "pineapple"; //(replaces first element with pineapple)
    //array_push($foods, "pineapple"); //(adds pineapple to end of array)
    //array_pop($foods); //(removes last element in array) 
    //array_shift($foods); //removes first element in array
    //$foods = array_reverse($foods); //(reverses order of array)
    //echo count($foods); //(counts number of elements)

    foreach($foods as $food) {
        echo $food . "<br>";
    }