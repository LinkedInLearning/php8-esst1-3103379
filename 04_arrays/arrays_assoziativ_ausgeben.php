<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $farben = [
        "rot"  => "#FF0000",
        "grün" => "#00FF00",
        "blau" => "#0000FF"
    ];
    //echo $farben[rot];
    //geht nicht:
    //echo "Die Farbe ist $farben["rot"]. ";
    //echo "Die Farbe ist $farben['rot']. ";

    echo "Die Farbe ist $farben[rot]. ";

    echo "Die Farbe ist {$farben['rot']}. ";
    
    echo "Die Farbe ist " . $farben["rot"] . ". ";
    
    ?>
</body>

</html>