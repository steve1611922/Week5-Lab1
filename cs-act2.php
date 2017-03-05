<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Sessions - Activity 2</title>
</head>
<body>
<p>
    <?php
    echo "All the session data... <br>";
    foreach ($_SESSION as $key=>$val)
    {echo $key. ": ".$val. "<br>";}
    ?>
</p>
<p>
<form action="session_page.php" method="post" id="login">
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
