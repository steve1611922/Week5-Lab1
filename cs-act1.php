<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Sessions and Cookies - Activity 1</title>
</head>
<body>
<p>
<?php
if (isset($_COOKIE["access_level"]))
{
    echo "Deleting cookies...";
    setcookie("access_level","",time()-3600);
    setcookie("customer","",time()-3600);
}

//displayAccessLevelInfo($_COOKIE["access_level"]);
echo "All the cookies... <br>";
foreach ($_COOKIE as $cookie_name => $cookie_value) {
    print "$cookie_name = $cookie_value <br/>";
}
?>
</p>
<p>
<form action="action_page.php" method="post" id="login">
    <fieldset>
        <legend>Enter your username and password.</legend>
        <label for="uname">Username:</label>
        <input type="text" name="uname" title="firstname" autofocus required><br><br>
        <label for="pws">Password:</label>
        <input type="password" name="pws" title="lastname" required><br>
        <input type="submit" value="Submit"><br>
    </fieldset>
</form>

</p>
</body>
</html>
