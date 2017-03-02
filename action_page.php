<?php
    $uname = $_POST["uname"];
    $pws = $_POST["pws"];
    echo $uname.$pws;
    if ($uname="steve" and $pws="mysecret") {
        echo "Setting cookies...";
        setcookie("access_level","standarduser");
        setcookie("customer",$uname);
    } else {
        echo "Deleting cookies...";
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