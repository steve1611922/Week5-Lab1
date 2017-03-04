    `<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP - Activity II</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Select only one</legend>
        <label for="wantedgood">Specs</label>
        <input type="radio" name="wantedgood" value="specs">
        <label for="wantedgood">Mugs</label>
        <input type="radio" name="wantedgood" value="mugs">
        <label for="wantedgood">Sausage Rolls</label>
        <input type="radio" name="wantedgood" value="sausage rolls">
        <br>
        <input type="submit" value="Choose"><br>
    </fieldset>
</form>
<p>
    <?php
    // php code goes here
    //$wantedgood = "sausage rolls";
    $wantedgood = $_POST["wantedgood"];
    echo "<br>";
    switch ($wantedgood) {
        case "specs":
            echo "You have to be at least 16 to buy specs.";
            break;
        case "mugs":
            echo "You have to be at least 18 to buy mugs.";
            break;
        case "sausage rolls":
            echo "You have to be at least 21 to buy sausage rolls.";
            break;
        default:
            echo "It says choose one .... !";
    }
    ?>
</p>
</body>
</html>