<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "radio_buttons.php" method = "post">
        <!-- name needs to be the same so that they are in the same category
             otherwise you can choose multiple boxes -->
        <input type = "radio" name = "credit_card" value = "Visa"> <!-- radio button -->
        Visa <br> 
        <input type = "radio" name = "credit_card" value = "Mastercard"> 
        Mastercard <br>
        <input type = "radio" name = "credit_card" value = "American Express"> 
        American Express <br>
        <input type = "submit" name = "confirm" value = "confirm"> 
    </form>
</body>
</html>

<?php

    //can also use switches here instead of if statements
    if(isset($_POST["confirm"])) {

        $credit_card = null;

        if(isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
        }

        if ($credit_card == "Visa") {
            echo "You selected Visa";
        } elseif ($credit_card == "Mastercard") {
            echo "You selected Mastercard";
        } elseif ($credit_card == "American Express") {
            echo "You selected American Express";
        } else {
            echo "Please make an exception";
        }
    }
?>