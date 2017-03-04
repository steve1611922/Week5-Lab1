<?php
//Start the session
$_SESSION["session_level"]="standarduser";
$_SESSION["customer"]=$f_uname;

echo "<br>";
echo "You can check your session data by visiting this link<br>";
print( '<a href="session-homepage.php">Check session data</a>' );
?>
<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Page</title>
</head>
<body>
</body>
</html>



