<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="head_text">Even or Odd Checker</h2>

        <form action="" method="post" class="form_div">
            <input type="number" name="num" placeholder="Enter number" required>
            <button type="submit" class="btn">Check</button>
        </form>

        <div id="result" class="output_div">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];

                if ($num % 2 == 0) {
                    echo "<p>$num is even.</p>";
                } else {
                    echo "<p>$num is odd.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
