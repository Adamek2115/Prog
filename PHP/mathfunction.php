<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="mathfunction.php" method="post">
        <label >x:</label>
        <input type="text" name="x"><br>
        <label >y:</label>
        <input type="text" name="y"><br>
        <label >z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    
      </form>
</body>
</html>
<?php
   $x = $_POST["x"];
   $y = $_POST["y"];

   $total = null;

  // Podaje totalną wartość np z -4 = 4 // $total = abs($x);
  //zaokrągla $total = round($x);
  //$total = floor($x);
  //$total = ceil($x);
  //potęgowanie $total = pow($x, $y);
  //$total = sqrt($x);
  //daje największą wartość z podanych $total = max($x , $y , $z);
  //$total = pi();
  //podaj losowe liczby chyba że są z jakiegoś przedziału $total = rand(1, 6);
   
   echo $total;

?>