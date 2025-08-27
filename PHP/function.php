<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function polekwadratu($a)
      {
           return $pole = $a * $a ;
      }
    function poleprostokąta($a , $b)
      {
           return $pole = $a * $b ;
      }
      function poletrujkąta($a , $h)
      {
           return $pole = ($a * $h)/2;
      }
      echo "pole kwadratu to:" ,polekwadratu(2)."<br>";
      echo "pole prostokąta to:", poleprostokąta(2, 4)."<br>";
      echo "pole trujkąta to:", poletrujkąta(2, 3)."<br>";
    ?>
</body>
</html>