<?php
/**
 * Created by PhpStorm.
 * User: 1611922
 * Date: 02/03/2017
 * Time: 14:42
 */
    $uname = $_POST["uname"];
    $pws = $_POST["pws"]; 
    if ($uname="steve" and "pwsmysecret") {
        setcookie("access_level","standarduser");
        setcookie("customer",$uname);
    } else {
        setcookie('steve','',1);
        setcookie('pws','',1);
        echo "Username or Password error.";
    }
    // Cookies
    // list all the cookies...
    echo "<br>";
    foreach ($_COOKIE as $cookie_name => $cookie_value)
    {
        print "$cookie_name = $cookie_value <br/>";
    }
    return;
?> 