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
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $power = $_POST["power"];
    echo "T H I S  I S  Y O U R  A V A T A R <br>";
    echo "Your name is ".$fname." ".$lname.".<br>";
    echo "You are ".$gender.".<br>";
    echo "Your superpower is ".$power.".<br>";
    ?>
</p>
</body>
</html>