<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>action_page</title>
</head>
<body>
<p>
    <?php
    // php code goes here
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
    echo "You can check your access level by visiting this link<br>";
    print( '<a href="homepage.php">Earth</a>' );
?>
</p>
</body>
</html>



