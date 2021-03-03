<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
   
    <?php
    $personen = [
        ["Peregrin", "Tuk"],
        ["Bilbo", "Beutlin"],
        ["Samweis", "Gamdschie"]
    ];
    //echo $personen[1][1];
    $zufallszahl = array_rand($personen);
    echo $personen[$zufallszahl][0];
    
    ?>
    
</body>

</html>