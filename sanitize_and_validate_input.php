<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "sanitize_and_validate_input.php" method = "post">
        <label> username: </label><br>
        <input type = "text" name = "username"><br>
        <label> age: </label><br>
        <input type = "text" name = "age"><br>
        <label> email: </label><br>
        <input type = "text" name = "email"><br><br>
        <input type = "submit" name = "login" value = "login"><br><br>


    </form>
</body>
</html>

<?php
    /*
    // ============================
    // 1. SANITIZING (Filtering)
    // ============================

    if (isset($_POST["login"])) {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); //It HTML-escapes special characters like single/double quotes;
                                                                                         // <, >, &, and ASCII values below 32. It helps prevent basic
                                                                                         //cross-site scripting (XSS) by turning dangerous symbols into safe HTML entities.
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); //strips all characters from a string except digits, plus signs and minus signs 
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //strips all illegal or inappropriate characters from an email string, leaving
                                                                           //only letters, numbers, and symbols like !#\$%&'*+-/=?^_{|}~@

        
        if (!empty($username)) {
            echo "Hello {$username} <br>";
        }

        if (!empty($age)) {
            echo "You are {$age} years old <br>";
        }

        if (!empty($email)) {
            echo "Your email is - {$email}";
        }

    }
    */

    // ============================
    // 2. Validation
    // ============================

    /*
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // checks if a value is a whole number. It returns the integer value on success or if false, then returns false
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); //checks if an email address has a valid syntax structure. It returns the email string if valid, or false if the format is invalid
        
        if (!empty($username)) {
            echo "Hello {$username} <br>";
        } else {
            echo "The username wasn't valid <br>";
        }

        if (!$age) {
            echo "That number wasn't valid <br>";
        } elseif (!empty($age)) {
            echo "You are {$age} years old <br>";
        }

        if (!$email) {
            echo "That email wasn't valid <br>";
        } elseif (!empty($email)) {
            echo "Your email is - {$email} <br>";
        }
    }
    */

?>