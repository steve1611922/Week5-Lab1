<?php
    session_start();
    $_SESSION["app"] = "Week5-Labs";
?>
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
<a href="intro-v.php">Intro to PHP  - Activity V</a><br>
<a href="intro-vi.php">Intro to PHP  - Activity VI</a><br>
<a href="intro-vii.php">Intro to PHP  - Activity VII</a><br>
<a href="srf-task1.php">Self referencing forms - Task 1</a><br>
<a href="srf-task2.php">Self referencing forms - Task 2</a><br>
<a href="srf-task3.php">Self referencing forms - Task 3</a><br>
<a href="mikecrabb-srf.php">Self referencing forms - tutorial</a><br>
<a href="cs-act1.php">Cookies - Activity 1</a><br>
<a href="cs-act2.php">Sessions - Activity 2</a><br>
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
     
        //use unset to remove previous winners
        //use isset to test for empty array element (previous winner) before picking next winner
        // Cookies
        // list all the cookies...
        echo "<br>";
        echo " ** All the cookies **<br>";
        foreach ($_COOKIE as $cookie_name => $cookie_value)
            {
                print "$cookie_name = $cookie_value <br/>";
            }
        echo "** All Session Variables **<br>";
        foreach ($_SESSION as $session_key => $session_val) 
            {
                print "$session_key = $session_val . <br/>";
            }
               
    ?>
</p>
</body>
</html>