<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <?php
    
    $age = 3;

    if($age >18){
        echo '<h3 style="color: green" >You are eligible to vote</h3>';
    }
    else {
        echo '<h3 style="color: red" >You are NOT eligible to vote</h3>';
    }
    
    ?>
</body>
</html>