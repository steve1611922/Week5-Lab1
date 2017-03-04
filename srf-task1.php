<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Lab-Self Referencing Forms- Task1</title>
</head>
<body>
<!--a href="http://example.com/search.html ?query=cat & type=image">http://example.com/search.html</a-->
<p>
<?php
    echo "<a href="http://example.com/search.html ?query=cat & type=image\">http://example.com/search.html</a>";
    // php code goes here
    $query = $_GET["query"];
    $type = $_GET["type"];
    echo "The query is " . $query . "and the type is " . $type;
?>
<?php
echo "Where would you like to say hello?";
?>
</p>
</body>
</html>