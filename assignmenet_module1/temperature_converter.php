<!DOCTYPE html>
<html>
<head>
    <title>Task 2 | Temperature Converter</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>
    
    <h1>Temperature Converter</h1>
    
    <?php
    $inputTemperature = '';
    $conversionType = 'celsiusToFahrenheit';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputTemperature = $_POST['temperature'];
        $conversionType = $_POST['conversion'];

        // Perform temperature conversion
        if ($conversionType === 'celsiusToFahrenheit') {
            $convertedTemperature = ($inputTemperature * 9/5) + 32;
        } else {
            $convertedTemperature = ($inputTemperature - 32) * 5/9;
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" step="0.01" required value="<?php echo $inputTemperature; ?>">
        
        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion">
            <option value="celsiusToFahrenheit" <?php if ($conversionType === 'celsiusToFahrenheit') echo 'selected'; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius" <?php if ($conversionType === 'fahrenheitToCelsius') echo 'selected'; ?>>Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Display the result
    if (isset($convertedTemperature)) {
        echo "<p>Result: $inputTemperature degrees ";
        
        if ($conversionType === 'celsiusToFahrenheit') {
            echo "Celsius is equal to $convertedTemperature degrees Fahrenheit.</p>";
        } else {
            echo "Fahrenheit is equal to $convertedTemperature degrees Celsius.</p>";
        }
    }
    ?>

        <!-- Footer -->
        <?php include_once('footer.php');?>
</body>
</html>
