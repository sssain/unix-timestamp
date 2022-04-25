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
    <br>
    <hr class="uk-margin-xlarge-left uk-margin-xlarge-right" style="border: 1px solid #303030;">


    <form action="" method="post">
        <div class="uk-margin-xlarge-left ">
            <h2 class="uk-text-primary">Convert To Unix TimeStamp</h2>
            <input type="text" name="date" class="uk-input uk-form-width-medium uk-background-primary" placeholder="date"> <input type="text" name="month" class="uk-input uk-form-width-medium uk-background-primary" placeholder="month"> <input type="text" name="year" class="uk-input uk-form-width-medium uk-background-primary" placeholder="year">
            <input type="submit" class="uk-button uk-button-default uk-text-primary">
            
            <h4 class="uk-text-primary">Results</h4>
            <?php

            // form
            $date  = ($_POST['date']) ?? 0;
            $month  = ($_POST['month'] )?? 0;
            $year  = ($_POST['year']) ?? 0;
            
            
            
            ?>

            <p class="uk-text-primary">Unix TimeStamp = <?php echo mktime(0,0,0,$month ,$date ,$year); ?> <br> GMT = <?php echo $date.' '. $month .' '. $year ?></p>
        </div>
    </form>
    <hr class="uk-margin-xlarge-left uk-margin-xlarge-right" style="border: 1px solid #303030;">
    
    <a href="about.php" class="uk-position-bottom-center uk-button-text uk-text-decoration-none uk-text-primary uk-margin-small-bottom" >What is Unix TimeStamp?</a>

    
</body>
</html>
