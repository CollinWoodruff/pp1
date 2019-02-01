<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
        <h1>Pair Program 1</h1>
        <?php
        require("functions.php");
            $numbers = array(7,9,8,9,8,8,6);
            echo "<h2>The array is:</h2>";
            printR($numbers);
            echo "<h2>The largest number is:</h2>";
            largest($numbers);
            echo "<h2>The average is:</h2>";
            average($numbers);
            echo "<h2>The non-duplicate array is:</h2>";
            removeDups($numbers);
        echo "<h2>The counting duplicate array is:</h2>";
        distribution($numbers);
        ?>


</body>
</html>