<! DOCTYPE html >
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Week5-Lab-1</title>
</head>
<body>
<p>Week 5 Tutorials</p><br>
<a href="intro-i.php">Intro to PHP Activity I</a><br>
<a href="intro-ii.php">Intro to PHP Activity II</a><br>
<a href="intro-iii.php">Intro to PHP Activity III & IV</a><br>
<a href="intro-vi.php">Intro to PHP  - Activity VI</a><br>
<a href="intro.php">Intro to PHP  - Activity VII</a><br>
<a href="cs-act1.php">Sessions and Cookies - Activity 1</a><br>
<a href="srf-task1.php">Self referencing forms - Task 1</a><br>

<p>
    <?php

        /*echo "Hello World";
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

        $provisionedActivities = array("specs","mugs","sausage rolls");
        $specCount = 0;
        $mugsCount = 0;
        $rollsCount = 0;
        $goodCount = 1;
        echo "<br><br>";
        /*do
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
        echo "No goods left."; */
        /*
        use unset to remove previous winners
        use isset to test for empty array element (previous winner) before picking next winner
        */
    /*
    // Cookies
        // list all the cookies...
        echo "<br>";
        foreach ($_COOKIE as $cookie_name => $cookie_value)
            {
                print "$cookie_name = $cookie_value <br/>";
            } */
    // Cookies Activity 1


    ?>
</p>
</body>
</html>