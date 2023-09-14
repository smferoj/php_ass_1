<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="head_text">Comparison Tool</h2>

        <form action="" method="post" class="form_div">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit" class="btn">Compare</button>
        </form>

        <div id="result" class="output_div">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];

                $largerNumber = ($num1 > $num2) ? $num1 : $num2;

                echo "The larger number is: $largerNumber";
            }
            ?>
        </div>
    </div>
</body>

</html>
