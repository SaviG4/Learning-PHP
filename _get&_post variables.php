<?php
/* 
$_GET, $_POST = special variables used to collect data from an HTML form
                data is sent to the file in the action attribute of <form> 
                <form action="some_file.php" method="get">

$_GET = Data is appended to the url
        NOT SECURE
        char limit
        Bookmark is possible w/ values
        GET requests can be cached
        Better for a search page

//$_POST = Data is packaged inside the body of the HTTP request
           MORE SECURE
           No data limit
           Cannot bookmark
           GET requests are not cached
           Better for submitting credentials
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //using $_POST (for sensitive data such as credentials)
    <form action = "_get&_post variables.php" method = "post">
        <label> username: </label><br>
        <input type = "text" name = "username"><br>
        <label> password: </label><br>
        <input type = "text" name = "password"><br>
        <input type = "submit" value = "Log in"><br><br><br>
    </form>

    //using $_GET
    <form action = "_get&_post variables.php" method = "get">
        <label> quantity: </label><br>
        <input type = "text" name = "quantity">
        <input type = "submit" value = "total"> <br><br><br>
        //ignore error messages below
    </form>
</body>
</html>
<?php
    //$_POST
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

    //$_GET
    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"]; 
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} {$item}'s <br>";
    echo "Your total is: \${$total}";

    //test