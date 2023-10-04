<!DOCTYPE html>
<html>
<head>
    <title>Task 4 | Even or Odd Checker</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>

    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>
    
    <h1>Even or Odd Checker</h1>
    
    <?php
    // Initialize variables
    $number = '';
    $result = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "The number $number is even.";
        } else {
            $result = "The number $number is odd.";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" id="number" required value="<?php echo $number; ?>">
        
        <input type="submit" value="Check">
    </form>

    <?php
    // Display the result
    if (!empty($result)) {
        echo "<p>$result</p>";
    }
    ?>

        <!-- Footer -->
        <?php include_once('footer.php');?>
</body>
</html>
