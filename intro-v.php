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
    $provisionedActivities = array("specs","mugs","sausage rolls");
    $specCount = 0;
    $mugsCount = 0;
    $rollsCount = 0;
    $goodCount = 1;
    echo "<br>";
    do
    {   
        $aGood = rand(0,2);
        switch ($provisionedActivities[$aGood])
        {
            case "specs":
                if ($specCount < 7)
                {
                    echo "On the " .($goodCount). " of the month " .$provisionedActivities[$aGood]. " are available.<br>";
                    $specCount ++;
                    $goodCount ++;
                }
                break;
            case "mugs":
                if ($mugsCount < 7)
                {
                    echo "On the " .($goodCount). " of the month " .$provisionedActivities[$aGood]. " are available.<br>";
                    $mugsCount ++;
                    $goodCount ++;
                }
                break;
            case "sausage rolls":
                if ($rollsCount < 7)
                {
                    echo "On the " .($goodCount). " of the month " .$provisionedActivities[$aGood]. " are available.<br>";
                    $rollsCount ++;
                    $goodCount ++;
                }
                break;
            default:
                $goodCount ++;
        }
        }
        while ($goodCount <= 21);
    echo "No goods left.";
?>
</p>
</body>
</html>