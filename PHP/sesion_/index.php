 <?php
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is login page
    <a href="home.php">Home page</a>
    <hr>
    <form action="index.php" method="post">
         Login:
    <input type="text" name="username"><br>
         Password:
    <input type="password" name="password" ><br>
    <input type="submit" name="Login" value="Login">
    </form>
</body>
</html>
        <?php
            if(isset($_POST["Login"]))
            { 
                if(!empty($_POST["username"])&&
                    (!empty($_POST["password"])))
                {
                    $_SESSION ["username"] = $_POST ["username"];
                    $_SESSION ["password"] = $_POST ["password"];
                        
                    header("location: home.php");
                }
                else
                {
                     echo "You didnt enter all fields";
                }
                   
            }
        ?>