<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="sanitizeinput.php" method="post">
            <label >nick:<label>
            <input type="text" name="nick" value="nick"><br>
           
            <label >age:<label>
            <input type="text" name="age" value="age"><br>
           
            <label >e-mail<e-mail></e-mail><label>
            <input type="text" name="e-mail" value="e-mail"><br>

            <input type="submit" name="login" value="dupa">
        </form>
        <?php
            if(isset($_POST["login"]))
            {
                $nick = filter_input(INPUT_POST, "nick", FILTER_SANITIZE_SPECIAL_CHARS);
                $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
                $email = filter_input(INPUT_POST, "e-mail", FILTER_SANITIZE_EMAIL);
                echo "Your nick is: {$nick}.<br>";
                echo "Your age is: {$age}.<br>";
                echo "Your email is: {$email}.<br>";
            }
        ?>
</body>
</html>