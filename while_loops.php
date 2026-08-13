<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "while_loops.php" method = "post">
        <input type = "submit" name = "stop" value = "stop";>
    </form>
</body>
</html>

<?php

    $seconds = 0;
    $running = true;
    echo "<br>";

    while ($running && $seconds < 1000) {
        if(isset($_POST["stop"])) {
            $running = false;
            echo "Program has been stopped";
        } else {
            $seconds ++;
            echo $seconds . "<br>";
        }
    }
?>

