<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Page</title>
</head>
<body>
<p>
    <?php
    session_start();
    //Set session values
    $_SESSION["session_level"] = "standarduser";
    $_SESSION["customer"] = $_POST["uname"];
    echo $_SESSION["session_level"].$_SESSION["customer"];
    echo "<br>";
    echo "You can check your session data by visiting this link<br>";
    print( '<a href="session-homepage.php">Check session data</a>' );
    ?>
</p>
</body>
</html>