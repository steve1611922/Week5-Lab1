<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP - Activity III</title>
</head>
<body>
<p>
    <?php
    // php code goes here
        // the original array
        $provisionedActivities = array("specs","mugs","sausage rolls");
        echo "The original array...";
        foreach($provisionedActivities as $x)
            { print "<p>$x</p>"; }
        // hugs not mugs
        $provisionedActivities[1] = "hugs";
        echo "Now hugs not mugs...";
        foreach($provisionedActivities as $x)
        { print "<p>$x</p>"; }
        // No sausages
        $provisionedActivities[2] = "";
        echo "No more sausage rolls...";
        foreach($provisionedActivities as $x)
        { print "<p>$x</p>"; }
    /*
        $provisionedActivities = array("specs","mugs","sausage rolls");
        for ($i = 1; $i < 31; $i=$i + 4)
            {$y = $i + 1;
                echo "<br>On the ".($i)." of the month no products are available.<br>";
                foreach($provisionedActivities as $x)
                {
                    echo "On the ".($y)." of the month ".$x." are available.<br>";
                    if ($y > 29) {break;}
                    $y ++;
                    echo "On the " .($i+1). " of the month".$provisionedActivities[$i+1]."are available.<br>";
                    echo "On the " .($i+2). " of the month".$provisionedActivities[$i+2]."are available.<br>";
                }
            }
    */
    ?>
</p>
</body>
</html>