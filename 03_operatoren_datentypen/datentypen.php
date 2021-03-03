<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
       ini_set("display_errors", 1);
       $a = "Hallo";
       var_dump($a);
       $a = 7;
       var_dump($a);

       echo "<hr>";
       $string = "3 Monate und 12 Tage";
       //gibt einer Warnung aus, wenn Fehlermeldungen aktiviert
       $erg = $string + 3;
       echo $erg;
      
       echo "<hr>";
       $string = "22";
       var_dump($string);
       $zahl = (int) $string;
       var_dump($zahl);
       echo "<hr>";
       
       echo gettype($zahl);

       echo "<hr>";
       

    ?>
</body>

</html>