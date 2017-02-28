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
        echo "Hello," . " " . "world" . "!" ."Coded another way";
        echo "<br>";
        echo 5 * 7;
        echo "<br>";
        $myname = "Steve Charlesworth";
        $myage = 50;
        echo "=My name is".$myname."and I am".$myage;
        echo "<br>";
        $name = "Steve";
        if ($name == "Simon") {
            print "I know you!";
        }
        else {
            print "Who are you?";
        }
    ?>
</p>
</body>
</html>