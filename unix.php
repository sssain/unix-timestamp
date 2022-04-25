<?php 

$time = time();
$realtime = date("d M Y");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/uikit.js"></script>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <title>Unix TimeStamp</title>
</head>
<body>
    &nbsp;
    <h1 id="app" class="uk-text-center uk-margin-xlarge-top uk-text-primary"><?php echo $time?></h1>
    <p class="uk-text-center uk-text-primary"><?php echo $realtime ?> </p>
    <a href="about.php" class="uk-position-bottom-center uk-button-text uk-text-decoration-none uk-text-primary uk-margin-small-bottom" >What is Unix TimeStamp?</a>

    
</body>
</html>