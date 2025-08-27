<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="pizza">
        pizza<br>
           <input type="checkbox" name="burger" value="burger">
        burger<br>
           <input type="checkbox" name="lassagne" value="lassagne">
        lassagne<br>
           <input type="checkbox" name="sushi" value="sushi">
        sushi<br>
        <input type="submit" name="submit">
     </form>
     <?php
        if(isset($_POST["submit"]))
        {
            if(isset($_POST["pizza"]))
            {
               echo"You like pizza";
            }
               if(isset($_POST["burger"]))
            {
               echo"You like burger";
            }
           if(isset($_POST["lassagne"]))
            {
               echo"You like lassagne";
            }
           if(isset($_POST["sushi"]))
            {
               echo"You like sushi";
            }
             if(empty($_POST["pizza"]))
            {
               echo"You don't like pizza";
            }
               if(empty($_POST["burger"]))
            {
               echo"You don't like burger";
            }
           if(empty($_POST["lassagne"]))
            {
               echo"You don't like lassagne";
            }
           if(empty($_POST["sushi"]))
            {
               echo"You don't like sushi";
            }
           
        }
     ?>
</body>
</html>