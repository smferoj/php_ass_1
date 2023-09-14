<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temperature converter</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="head_text">Temperature Converter</h2>

        <form action="" method="post" class="form_div">
            <input type="number" name="num" placeholder="Enter number" required>
           
            <select name="operation" class="operation">
                <option value="convertToCelcius">Convert to Celcius</option>
                <option value="convertToFarenhite">Convert to Farenhite</option>
            </select>
            <button type="submit" class="btn"> Calculate</button>

        </form>

        <div id="result" class=output_div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "convertToCelcius":
                        $result = ($num -32)*5/9;
                        echo "Result: $result";
                        break;
                    case "convertToFarenhite":
                        $result = 5/9*($num -32);
                        echo "Result: $result";   
                }
            }
            ?>
        </div>

    </div>
</body>

</html>