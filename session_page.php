<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Page</title>
</head>
<body>
<p>
    <?php
    //Start the session
    $_SESSION["session_level"] = "standarduser";
    $_SESSION["customer"] = $_POST["uname"];

    echo "<br>Session level:".$_SESSION["session_level"];
    echo "<br>Session customer".$_SESSION["customer"];
    echo "<br>";
    echo "You can check your session data by visiting this link<br>";
    print( '<a href="session-homepage.php">Check session data</a>' );
    ?>
</p>
</body>
</html>