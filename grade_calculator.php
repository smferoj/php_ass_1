<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="head_text">Grade Calculator</h2>

        <form action="" method="post" class="form_div">
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" required><br>

            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" required><br>

            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" required><br>

            <button type="submit" class="btn">Calculate</button>
        </form>

        <div id="result" class="output_div">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $score1 = $_POST["score1"];
                $score2 = $_POST["score2"];
                $score3 = $_POST["score3"];

                $average = ($score1 + $score2 + $score3) / 3;

                $letterGrade = '';
                if ($average >= 90) {
                    $letterGrade = 'A';
                } elseif ($average >= 80) {
                    $letterGrade = 'B';  
                } elseif ($average >= 70) {
                    $letterGrade = 'C';
                } elseif ($average >= 60) {
                    $letterGrade = 'D';
                } else {
                    $letterGrade = 'F';
                }

                echo "Average Score: $average<br>";
                echo "Letter Grade: $letterGrade";
            }
            ?>
        </div>
    </div>
</body>

</html>
