<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Sessions - Activity 2</title>
</head>
<body>
<?php
    printCookieSession();
?>
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
</body>
</html>
