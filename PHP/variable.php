<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $name = "Neggro garcia";
       $food = "shit";
       $email = "łukaszNakkakał2115@gmail.com";
       $age = "Old shyt";
       $users = "69";
       $price ="2137692115";
       $tax_rate= "6.7";
       $online_status= true;
       $quantity = 2;

       echo"I'm a {$name} <br>";
       echo"I love eating {$food}<br>";
       echo"Your email is {$email}<br>";
       echo"Your such a {$age} <br>";
       echo"there are {$users} online neggros <br>";
       echo"this shyt cost \${$price} bro not worth it<br>";
       echo"tax rate is {$tax_rate}% <br>";
       echo"your buddy is online right now  $online_status <br>";
       echo"you have ordered {$name} x {$food} <br>";
       $total= $price * $quantity;
       echo"Your total cost is \${$total}";
    ?>
</body>
</html>