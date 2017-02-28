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
        $provisionedActivities = array("specs","mugs", "sausage rolls");
        foreach($provisionedActivities as $x)
            { print "<p>$x</p>";}
    ?>
</p>
</body>
</html>