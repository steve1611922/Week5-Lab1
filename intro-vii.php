<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Introduction to PHP- Activity VII</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    $players = array("Tom", "Dick", "Harry", "Pinky", "Perky","Jerry", "Daffy", "Bugs_Bunny", "Foghorn Leghorn");
    echo "<br>"; echo "W A N T E D";echo "<br>";
    wanted ($players[rand(0, count($players) - 1)],3,5,7);echo "<br>";
    wanted ($players[8],1,3,5);echo "<br>";
    wanted ($players[2],2,1,12);echo "<br>";
    // The wanted poster function.
    function wanted ($name, $specsOwned, $mugsOwned, $rollsOwned)
    {
        echo "<br>Wanted:".strtoupper($name);
        echo "<br>Known to be in possession of the following items:";
        echo "<br>Specs(".$specsOwned.")";
        echo "<br>Mugs(".$mugsOwned.")";
        echo "<br>Sausage Rolls(".$rollsOwned.")";
        //echo "<br>Award for capture £".($specsOwned*$mugsOwned*$rollsOwned)/2;
        $reward = ($specsOwned*$mugsOwned*$rollsOwned)/2;
        printf("<br>Award for capture £%.2f ", $reward);
    }
    ?>
</p>
</body>
</html>