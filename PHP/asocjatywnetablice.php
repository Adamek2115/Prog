 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
          <form action="asocjatywnetablice.php" method="post">
             <label>Enter a country</label>
             <input type="text" name="country">
             <input type="submit">
          </form>
 </body>
 </html>
 <?php    
          $capitals= array("USA"=>"NYC",  
                    "POLSKA"=>"KRAKÓW",
                    "NIEMCY"=>"BERLIN",
                    "FRANCJA"=>"PARYŻ",
                    "ROSJA"=>"MOSKWA",
                    "CHINY"=> "PEKIN",
                    "JAPONIA"=>"TOKYO");

        //$capitals["USA"] = "Las Vegas";
        $capitals["China"] = "Beijing";
        //array_pop($capitals);
        //array_shift($capitals);
        //$keys = array_keys($capitals);
        //$values = array_values($capitals);
        //$capitals = array_flip($capitals);
        //$capitals = array_reverse($capitals);
        //echo count($capitals);
     
        /* foreach($capitals as $keys => $values)
        {
             echo"{$keys} => {$values} <br>";
        }*/
        
      // $capitals=$_POST["country"];
        $capital = $capitals[$_POST["country"]];
        echo "The capital is {$capital}";

?>
