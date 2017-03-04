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
    echo "Your name is ".$fname." ".$lname;
    echo "You are ".$gender;
    echo "Your superpower is ".$super;
    ?>
</p>
</body>
</html>