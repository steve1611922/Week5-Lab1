<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Sessions and Cookies - Activity 1</title>
</head>
<body>
<p>
<form action="action_page.php" method="post" id="login">
    <fieldset>
        <legend>Enter your username and password.</legend>
        <label for="uname">Username:</label>
        <input type="text" name="uname" value="steve" title="firstname" autofocus required><br><br>
        <label for="pws">Password:</label>
        <input type="password" name="pws" value="mysecret" title="lastname" required><br>
        <input type="submit" value="Submit"><br>
    </fieldset>
</form>
<?php
    echo "Hello ".$uname;
    if (isset($_COOKIE["access_level"]))
    {
        echo "Your access level is " . $_COOKIE["access_level"];
    }
    else
    {
        echo "You are are not logged in";
    }
    //displayAccessLevelInfo($_COOKIE["access_level"]);
    echo "Done.";
echo "<br>";
echo "All the cookies... <br>";
foreach ($_COOKIE as $cookie_name => $cookie_value) {
    print "$cookie_name = $cookie_value <br/>";
}
?>
</p>
</body>
</html>
