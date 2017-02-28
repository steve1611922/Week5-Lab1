/**
 * Created by PhpStorm.
 * User: 1611922
 * Date: 28/02/2017
 * Time: 14:00
 */
<! DOCTYPE html >
<html>
 <head>
</head>
<body>
 <p>
    <?php
        echo "Hello World";
        echo "<br>";
        echo "Hello," . " " . "world" . "!" ." Coded another way";
        echo "<br>";
        echo 5 * 7;
        echo "<br>";
        $myname = "Steve Charlesworth";
        $myage = 50;
        echo "My name is " . $myname . " and I am " . $myage;
        echo "<br>";
        $name = "Steve";
        if ($name == "Simon") {
            print "I know you!";
        }
        else {
            print "Who are you?";
        }
        echo "<br>";
        echo "I get printed! <br>";
        // I don't! I'm a comment.
        /* I don’t get printed either
        and neither do I */
        if ($myage > 16) { echo $myname.". You may buy specs.<br>";}
        if($myage > 18) {echo $myname.". You may also buy mugs.<br>";}
        if ($myage > 21) {echo $myname.". You may also buy sausage rolls.<br>";}
        $wantedgood = "sausage rolls";
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
        /* // the original array
        $provisionedActivities = array("specs","mugs","sausage rolls");
        echo "The original array...";
        foreach($provisionedActivities as $x)
            { print "<p>$x</p>"; }
        // hugs not mugs
        $provisionedActivities[1] = "hugs";
        echo "The hugs not mugs...";
        foreach($provisionedActivities as $x)
        { print "<p>$x</p>"; }
        // No sausages
        $provisionedActivities[2] = "";
        echo "No more sausage rolls...";
        foreach($provisionedActivities as $x)
        { print "<p>$x</p>"; }
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
            } */
        $provisionedActivities = array("specs","mugs","sausage rolls");
        $specCount = 0;
        $mugsCount = 0;
        $rollsCount = 0;
        $goodCount = 1;
        do
        {
            $aGood = rand(0,2);
            $daysGood = $provisionedActivities[$aGood];
            switch ($daysGood)
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
                    $rollsCount ++;
                    if ($rollsCount < 7)
                    {
                        echo "On the " .($goodCount). " of the month " .$provisionedActivities[$aGood]. " are available.<br>";
                        $rollsCount ++;
                        $goodCount ++;
                    }
                    break;
                }
        }
        while ($goodCount <= 28)
    ?>
</p>
</body>
</html>