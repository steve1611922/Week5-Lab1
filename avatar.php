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
    $super = $_POST["super"];
    echo "Your name is ".$fname." ".$lname."<br>";
    echo "You are ".$gender"<br>";
    echo "Your superpower is ".$super"<br>";
    ?>
</p>
</body>
</html>