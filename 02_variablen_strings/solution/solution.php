<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .besonders {
            background-color: lavender;
            padding: 1rem;
            border-radius: 4px;
            max-width: 20rem;
        }
    </style>
</head>

<body>
    <!--  Variablen für Name, Ort und Alter definieren 
       ausgeben lassen 
       Alles über X (als Überschrift)
       X wohnt in Y und ist Z alt (als Absatz mit Klasse besonders) 

       Danach in einer Überschrift den Pfad zum aktuellen Skript ausgeben lassen
       Tipp: magische Konstante nutzen -->
       <?php
       $name = "Nadine";
       $alter = 13;
       $ort = "Pfaffing";
       echo "<h1>Alles über $name</h1>\n";
       echo "<p class=\"besonders\">$name wohnt in $ort und ist $alter Jahre alt</p>\n";
       ?>
       <h5><?php echo __FILE__; ?></h5>
    
</body>

</html>