<?php
    $f_uname = $_POST["uname"];
    $f_pws = $_POST["pws"];
    echo $f_uname.$f_pws;
    if ($f_uname="steve" and $f_pws="mysecret") {
        echo "Setting cookies...";
        setcookie("access_level","standarduser");
        setcookie("customer",$f_uname);
    } else {
        echo "Deleting cookies...";
        setcookie('steve','',1);
        setcookie('pws','',1);
        echo "Username or Password error.";
    }
    // Cookies
    // list all the cookies...
    echo "<br>";
    foreach ($_COOKIE as $cookie_name => $cookie_value) {
        print "$cookie_name = $cookie_value <br/>";
    }
?> 