<?php

    // Logical operators = combine conditional statements
    // if(conditionl && condition2)
    // && True if both conditions are true 
    // || True if at least one condition is true 
    // != True if false. False if true.

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
        $weekly_pay = 0;
    }
    elseif ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }
    else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";

?>