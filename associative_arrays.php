<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "associative_arrays.php" method = "post">
        <label> Enter a country </label>
        <input type = "text" name = "country">
        <input type = "submit"> 
    </form>
</body>
</html>

<?php
    $capitals = array("UK" => "London",
                      "Italy" => "Rome",
                      "Japan" => "Tokyo",
                      "Kenya" => "Naiobi");

    $capital = $capitals[$_POST["country"]];
    echo "The capital of {$_POST["country"]} is {$capital}";
?>