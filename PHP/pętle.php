<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pętle.php" method="post">
        <label >wpisz liczbę którą rozpiszę w pętli</label>
        <input type="text" name="licznik">
        <input type="submit" value="press">
    </form>
    <?php
        $licznik=$_POST["licznik"];
        for($i=0;$i<=$licznik;$i++)
        {
            echo $i. "<br>";
        }
    ?>
</body>
</html>