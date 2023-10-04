<!DOCTYPE html>
<html>
<head>
    <title>Task 1 | Personal Information</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <?php
    $name = "Nafizul Islam";
    $age = 25;
    $country = "Bangladesh";
    $introduction = "Assalamualaikum,
    Greetings! This is $name, and I am a junior Software Engineer from Dhaka, $country. With a strong foundation in HTML, CSS, JavaScript, Laravel and PHP my career objective is to develop cutting-edge and user-friendly web solutions that bring tangible business value. I am highly motivated to stay abreast of the latest web technologies and industry best practices.
    Passionate about programming, I find joy and excitement in crafting code that solves problems and delivers exceptional user experiences. I am particularly skilled in customizing WordPress websites, utilizing my knowledge of the platform to create tailored solutions.
    My aspiration is to collaborate with a team of talented professionals who share my enthusiasm for creating innovative web solutions that clients can rely on. By working together, we can push the boundaries of web development and deliver outstanding results.
    Thank you for taking the time to read my profile. I am eagerly looking forward to connecting with like-minded individuals in the industry. Please feel free to reach out to me for any exciting opportunities or collaborations.";
    ?>
    
    <!-- Navigation bar -->
    <?php include_once('navigation.php');?>

    <h1>Personal Information</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Age:</strong> <?php echo $age; ?></p>
    <p><strong>Country:</strong> <?php echo $country; ?></p>
    <p><strong>Introduction:</strong> <?php echo $introduction; ?></p>

        <!-- Footer -->
        <?php include_once('footer.php');?>
</body>
</html>
