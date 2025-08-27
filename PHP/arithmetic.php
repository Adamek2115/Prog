<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Arithmetic operators
    //+ - * / ** %
    $x = 10;
    $y = 5;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    $z = $x ** $y;
    //$z = $x % $y;    
    echo $z;

    //increment and decrement operators
       
    $counter = 0;

    //$counter = $counter + 1 ;
    //$counter = $counter +=2 ;
    $counter = $counter -=1 ;
    echo $counter;
    ?>
</body>
</html>