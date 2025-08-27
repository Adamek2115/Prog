<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="whileloop.php" method="post">
        <label><h1>Stoper</h1></label>
        <input type="submit" name="stop" value="stop">
    </form>
    <?php
        $secundy=0;
        $timer = true;
        while($timer){
              if(isset($_POST["stop"]))
         {
            $timer=false;
         }
        else
        {
             $secundy++;
            echo $secundy."<br>";
        }
        }   
    ?>
</body>
</html>