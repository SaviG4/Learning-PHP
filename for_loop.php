<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = ""for_loop.php" method = "post">
    <label> Enter a number to count to: </label>
    <input type = "text" name = "counter">
    <input type = "submit" value = "start"><br>
</body>
<?php
    $counter = $_POST["counter"];
    for ($i = 0; $i <= $counter; $i++) {
        echo $i . "<br>";
    }
    echo "<br>";
?>
<body>
    <form action = ""for_loop.php" method = "post">
    <label> Enter a number to count down from: </label>
    <input type = "text" name = "counter2">
    <input type = "submit" value = "start"><br>
</body>
</html>

<?php
    $counter2 = $_POST["counter2"];
    for ($i = $counter2; $i > 0; $i--) {
        echo $i . "<br>";
    }
?>