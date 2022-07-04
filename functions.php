<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <?php
    function sayhi(){
        echo "Hi Gg <br/>";
    }
    sayhi();

    function addfunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is ". $sum;
    }
    addfunction(22, 71);
    ?>
</body>
</html>