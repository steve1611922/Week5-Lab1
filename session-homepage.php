<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Homepage</title>
</head>
<body>
<p>
    <?php
    session_start();
    // php code goes here
    include "myPHPFunctions.php";
    displaySessionInfo($_SESSION["session_level"]);
    printCookieSession();

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