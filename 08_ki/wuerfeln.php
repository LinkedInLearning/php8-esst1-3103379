<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    // Ein Würfelspiel
    // es wird so lange gewürfelt, bis eine 6 gewürfelt wird
    // die Anzahl der Würfe wird ausgegeben
    $wuerfe = 0;
    do {
        $wurf = rand(1, 6);
        echo "Wurf: $wurf<br>";
        $wuerfe++;
    } while ($wurf != 6);
    echo "Anzahl der Würfe: $wuerfe";



    ?>
    
</body>
</html>