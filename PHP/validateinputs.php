<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <form action="validateinputs.php" method="post">
            <label >nick:<label>
            <input type="text" name="nick" value="nick"><br>
           
            <label >age:<label>
            <input type="text" name="age" value="age"><br>
           
            <label >e-mail<label>
            <input type="text" name="email" value="email"><br>

            <input type="submit" name="login" value="dupa">
        </form>
</body>
</html>
<?php
if(isset($_POST["login"])){

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if(empty($age)){
        
        echo"That age wasn't valid";
    }
    else{
        echo "Your age is: $age years old";
    }
}
?>

<!--
Explanation:

Input Sanitization:
- Cleans the input by removing or encoding unwanted characters.
- Ensures the input is safe to use (e.g., removing HTML tags, special characters).
- Example: FILTER_SANITIZE_EMAIL removes illegal characters from an email.

Input Validation:
- Checks if the input meets certain criteria or format.
- Ensures the input is valid according to rules (e.g., is a valid email format, is an integer).
- Example: FILTER_VALIDATE_EMAIL checks if the input is a valid email format.

In summary:
- Sanitization cleans the input.
- Validation checks if the input is valid.
-->
