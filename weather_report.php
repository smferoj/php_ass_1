<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="head_text">Weather Report</h2>

        <form action="" method="post" class="form_div">
            <input type="number" name="temperature" placeholder="Enter temperature" required>
            <button type="submit" class="btn">Check</button>
        </form>

        <div id="result" class="output_div">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST["temperature"];

                if ($temperature <= 0) {
                    echo "It's freezing!";
                } elseif ($temperature <= 15) {
                    echo "It's moderate cool";
                } else {
                    echo "It's warm.";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
