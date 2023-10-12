<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 Laboratory Exercise 1</title>
</head>
<body>

    <h2>Odd or Even Number Checker</h2>

    <form method="get">
        <input type="text" name="num">
        <input type="submit">
    </form>

    <?php

    if(isset($_GET["num"])) {
        $num = $_GET["num"];

        if (is_numeric($num)) {
            if ($num % 2 == 0) {
                echo "<h2>" . $num . " is an Even number!</h2>";
            } else {
                echo "<h2>" . $num . " is an Odd number! </h2>";
            }
        } else {
            echo "<br>Input is not a valid number!";
        }
    }
    ?>
</body>
</html>


 