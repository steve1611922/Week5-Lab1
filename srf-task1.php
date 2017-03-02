<! DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week5-Lab-Self Referencing Forms- Task1</title>
</head>
<body>
<a href="http://example.com/search.html ?query=cat & type=image">Blarg</a>
<p>
<?php
    // php code goes here
    $query = $_GET["query"];
    $type = $_GET["type"];
    echo "The query is " . $cat . "and the type is " . $image;
?>
</p>
</body>
</html>