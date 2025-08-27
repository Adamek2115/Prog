<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>zgadnij swoją ocenę!!!</h1>
    <?php
      $ocena = 2;
      $punky = 10;

      switch($ocena)
      {
        case "6":
          if($punky >= 28 && $punky <= 30)
          {
            echo "Masz 6"; 
          }
          else
          {
            echo "szukaj dalej";
          }
          break;
        case "5":
          if($punky >= 25 && $punky < 28){
            echo "Masz 5"; 
          }
          else
          {
            echo "szukaj dalej";
          }
          break;
        case "4":
          if($punky >= 20 && $punky < 25){
            echo "Masz 4"; 
          }
          else
          {
            echo "szukaj dalej";
          }
          break;
        case "3":
          if($punky >= 15 && $punky < 20){
            echo "Masz 3"; 
          }
          else
          {
            echo "szukaj dalej";
          }
          break;
        case "2":
          if($punky >= 8 && $punky < 15){
            echo "Masz 2"; 
          }
          else
          {
            echo "szukaj dalej";
          }
          break;
        case "1":
          if($punky >= 0 && $punky < 8){
            echo "Masz 1"; 
          }
          else
          {
            echo "szukaj dalej";
          }
          break;
      }
    ?>
</body>
</html>
