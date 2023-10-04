<!DOCTYPE html>
<html>
<head>
    <title>Task 7 | Simple Calculator</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>
    
    <h1>Simple Calculator</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1"><br>
        
        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>
        
        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2"><br>
        
        <input type="submit" value="Calculate">
    </form>
    
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        
        // Initialize the result variable
        $result = 0;
        
        // Perform the selected operation
        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<div class='result'>Error: Division by zero is not allowed.</div>";
                    exit();
                }
                break;
            default:
                echo "<div class='result'>Error: Invalid operation selected.</div>";
                exit();
        }
        
        // Display the result
        echo "<div class='result'>The result of $operation is: " . $result . "</div>";
    }
    ?>

        <!-- Footer -->
        <?php include_once('footer.php');?>
</body>
</html>
