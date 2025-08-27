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
   $password = "Password1230";

   $hash = password_hash($password, PASSWORD_DEFAULT);
   
   if(password_verify("Password1230", $hash))
   {
    echo"You are logged in";

   }
   else
   {
    echo "Wrong password";
   }

?>