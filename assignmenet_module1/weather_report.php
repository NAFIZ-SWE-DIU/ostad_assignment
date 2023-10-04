<!DOCTYPE html>
<html>
<head>
    <title>Task 5 | Weather Report</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>

    <h1>Weather Report</h1>
    
    <?php
    // Define a variable for the temperature
    $temperature = 20;

    if ($temperature <= 0) {
        $weatherMessage = "It's freezing!";
    } elseif ($temperature > 0 && $temperature <= 15) {
        $weatherMessage = "It's cool.";
    } else {
        $weatherMessage = "It's warm.";
    }
    ?>

    <p>The current temperature is <?php echo $temperature; ?>°C.</p>
    <p><?php echo $weatherMessage; ?></p>

    <!-- Footer -->
    <?php include_once('footer.php');?>

</body>
</html>
