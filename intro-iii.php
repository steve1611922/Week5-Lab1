<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP - Activity III and IV</title>
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

        for ($i=1; $i<=30; $i++)
        {
            if (fmod($i,2)== 0) {echo "On the ".($i)." of the month Specs are available.<br>";}
            if (fmod($i,3)== 0) {echo "On the ".($i)." of the month Mugs are available.<br>";}
            if (fmod($i,4)== 0) {echo "On the ".($i)." of the month Sausage Rolls are available.<br>";}
        }
    ?>
</p>
</body>
</html>