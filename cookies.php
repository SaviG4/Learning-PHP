<?php
    setcookie("fav_food", "pizza", time() + 86400, "/"); //(key, value, time, file path) (86400secs is 1 day)
    setcookie("fav_drink", "boba", time() + (86400 * 2), "/"); //(key, value, time, file path) (86400secs is 1 day)
    setcookie("dessert", "cheesecake", time() + (86400 * 4), "/"); //(key, value, time, file path) (86400secs is 1 day)

    //to VIEW cookies:
    //1 - inspect web page
    //2 - go to applications
    //3 - underneath storage, open up cookies and click https://code.test

    //to DELETE cookie, just set time to -----> time() - 1

    
    foreach($_COOKIE as $key => $value) {
        echo "$key = $value <br>";
    }

    echo "<br>";

    if (isset($_COOKIE["fav_food"])) {
        echo "buy some {$_COOKIE["fav_food"]} !!";
    } else {
        echo "I don't know your favourite food";
    }
?>