<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Self Referencing Form - Task 3</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Super hero, enter your details...</legend>
        <label for="fname">First Name:</label><input type="text" name="fname" value=""><br>
        <label for="lname">Last Name:</label><input type="text" name="lname" value=""><br>
        <label for="gender">Male</label><input type="radio" name="gender" value="male"><br>
        <label for="gender">Female</label><input type="radio" name="gender" value="female"><br>
        <label for="power">Superpower:</label><input type="text" name="power" value=""><br>
        <input type="submit" value="Register" />
    </fieldset>
</form>
<p>
    <?php
    $fmethod = $_SERVER["REQUEST_METHOD"];
    if ($fmethod === "POST")
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $power = $_POST["power"];
        echo "T H I S  I S  Y O U R  A V A T A R <br>";
        echo "Your name is ".$fname." ".$lname.".<br>";
        echo "You are ".$gender.".<br>";
        echo "Your superpower is ".$power.".<br>";
    }elseif ($fmethod === "GET")
    {
        $fname = $_GET["fname"];
        $lname = $_GET["lname"];
        $gender = $_GET["gender"];
        $power = $_GET["power"];
        echo "T H I S  I S  Y O U R  A V A T A R <br>";
        echo "Your name is ".$fname." ".$lname.".<br>";
        echo "You are ".$gender.".<br>";
        echo "Your superpower is ".$power.".<br>";
    }esle  {echo "impossible";}
    ?>
</p>
</body>
</html>