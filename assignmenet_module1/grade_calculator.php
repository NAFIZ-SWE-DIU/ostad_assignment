<!DOCTYPE html>
<html>
<head>
    <title>Task 3 | Grade Calculator</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>
    
    <h1>Grade Calculator</h1>
    
    <?php
    // Define variables for test scores
    $score1 = 0; // Replace with the actual test scores
    $score2 = 0;
    $score3 = 0;
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];
        
        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;
        
        // Determine the letter grade
        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required value="<?php echo $score1; ?>">
        
        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required value="<?php echo $score2; ?>">
        
        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required value="<?php echo $score3; ?>">
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the result
    if (isset($average) && isset($grade)) {
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>

        <!-- Footer -->
        <?php include_once('footer.php');?>
</body>
</html>
