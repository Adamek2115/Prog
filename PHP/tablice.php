<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $foods = array("pizza","burger","kebab","sushi","fries","chciken");
        foreach ($foods as $food)
        {
            echo $food ."<br>";
        }
      echo count($foods)
    ?>
</body>
</html>