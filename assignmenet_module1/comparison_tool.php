<!DOCTYPE html>
<html>
<head>
    <title>Task 6 | Number Comparison Tool</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>

    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>
    
    <h1>Number Comparison Tool</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1"><br>

        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2"><br>
        <input type="submit" value="Compare">
    </form>
    
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($num1 > $num2) ? $num1 : $num2;

        // Display the result
        echo "<div class='result'>The larger number is: " . $largerNumber . "</div>";
    }
    ?>

        <!-- Footer -->
        <?php include_once('footer.php');?>
</body>
</html>
