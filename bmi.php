<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Resultaat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST["weight"];
            $height = $_POST["height"] / 100; // Omzetten naar meters

            $bmi = $weight / ($height * $height);

            echo "<h2>Je BMI is: " . number_format($bmi, 1) . "</h2>";

            if ($bmi < 18.5) {
                echo "Je hebt ondergewicht.";
            } elseif ($bmi < 24.9) {
                echo "Je hebt een normaal gewicht.";
            } elseif ($bmi < 29.9) {
                echo "Je hebt overgewicht.";
            } else {
                echo "Je hebt obesitas.";
            }
        }
        ?>
    </div>
</body>
</html>
