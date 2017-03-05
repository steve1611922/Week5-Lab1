<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    function printCookieSession()
    {
        // list all the cookies and session key value pairs
        echo "<br>";
        echo " ** All the cookies **<br>";
        foreach ($_COOKIE as $cookie_name => $cookie_value)
        { print "$cookie_name = $cookie_value <br/>"; }
        echo "** All Session Variables **<br>";
        foreach ($_SESSION as $session_key => $session_val)
        { print "$session_key = $session_val . <br/>"; }
    }
    ?>
</p>
</body>
</html>