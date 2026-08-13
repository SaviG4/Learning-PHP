<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "checkboxes.php" method = "post">
        <!-- name needs to be the same so that they are in the same category
             otherwise you can choose multiple boxes -->
        <input type = "checkbox" name = "foods[]" value = "Pizza";>
        Pizza<br>
        <input type = "checkbox" name = "foods[]" value = "Burger";>
        Burger<br>
        <input type = "checkbox" name = "foods[]" value = "Hotdog";>
        Hotdog<br>
        <input type = "checkbox" name = "foods[]" value = "Taco";>
        Taco<br>
        <input type = "submit" name = "submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        $foods = $_POST["foods"];

        foreach($foods as $food) {
            echo "You chose a $food <br>";
        }
    }