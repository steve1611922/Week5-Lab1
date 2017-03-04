<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP - Activity II</title>
</head>
<body>
<p>Select only one</p>
$wantedgood = null
<input type="radio" name="wantedgood" value="specs">
Specs
<br>
<input type="radio" name="wantedgood" value="mugs">
Mugs
<input type="radio" name="wantedgood" value="sausage rolls">
Sausage Rolls
<p>
    <?php
    // php code goes here
    //$wantedgood = "sausage rolls";
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
            echo "All the hobbits have gone home";
    }
    ?>
</p>
</body>
</html>