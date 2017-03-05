<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    displayAccessLevelInfo($_SESSION["session_level"]);
    displayCookieSession();

    function displaySessionInfo($access_level)
    {
        if ($access_level == "standarduser")
        {
            echo "<p>You are currently logged in as a standard user</p>";
        }
        elseif ($access_level == "root")
        {
            echo "<p>You are currently logged in as a root user</p>";
            echo "<p>You now have access to additional administrative features</p>";
        }
    }
    ?>
</p>
</body>
</html>