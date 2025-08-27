<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="radio.php" method="post">
            <label >VISA</label>
        <input type="radio" name="paymethod" value="visa"><br>
            <label >mastercard</label>
        <input type="radio" name="paymethod" value="mastercard"><br>
            <label >paypal</label>
       <input type="radio" name="paymethod" value="paypal"><br>
            <label >blik</label>
       <input type="radio" name="paymethod" value="blik"><br>
        <input type="submit" name="confirm" >
     </form>
</body>
</html>
  <?php
       
      if(isset($_POST["confirm"]))
      {  
          $paymethod=null;
      
       if(isset($_POST["paymethod"]))
        {
          $paymethod = $_POST["paymethod"];
        } 
        if($paymethod=="visa")
        {
            echo" You have chosen visa";
        }
        elseif($paymethod=="mastercard")
        {
            echo " You have chosen mastercard";
        }
        elseif($paymethod =="paypal")
        {
            echo " You have chosen paypal";
        }
        elseif($paymethod=="blik")
        {
            echo " You have chosen blik";
        }
        else
        {
            echo "You have not chosen any paymethod";
        }
      }
      
  ?>