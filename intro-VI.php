<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Introduction to PHP- Activity VI</title>
</head>
<body>
<p>
    <?php
    // php code goes here
    $players = array("Tom", "Dick", "Harry", "Pinky", "Perky","Jerry", "Daffy", "Bugs_Bunny", "Foghorn Leghorn");
    $provisionedActivities = array("specs","mugs","sausage rolls");
    sort($players);
    foreach($provisionedActivities as $x)
    {
        do
        {
            $randPos = rand(0, count($players) - 1);
        } while (!isset($players[$randPos]));
        $winner = $players[$randPos];
        echo "<br>The winner of ".$x. " is ".strtoupper($winner)."<br>";
        unset($players[$randPos]);
    }
    ?>
</p>
</body>
</html>