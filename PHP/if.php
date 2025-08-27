<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
  /*  $adult = true;

    if($adult)
    {
        echo "You may enter this site ";
    }
    else
    {
        echo "You aren't allowed to enter this site";
    }*/
     $wypłata = null;
     $godzniypracy =30 ;
     $stawkanagodznie = 20;
     $dnipracy=24;

     $wypłata= ($godzniypracy*$stawkanagodznie) *$dnipracy;
     echo "\${$wypłata} <br>" ;
    
     if($wypłata>10000)
   {
    echo "Zarobiłeś więcej niż \$10000";
   }
   else
   {
    echo "Zarobiłeś mniej niż \$10000";
   }
?>