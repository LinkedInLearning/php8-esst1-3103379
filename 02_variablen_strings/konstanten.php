<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    //Variable
    $zahl = 1;
    $zahl = 3;
    echo "Zahl ist $zahl.";
    echo "<hr>";

    //Konstante
    //define("MINWERT", 5);
    const MINWERT = 7;
    echo MINWERT;
    echo "<br>Der Mindestwert ist " . MINWERT;
    echo "<hr>";
    //Vordefinierte Konstanten
    echo M_PI;
    echo "<hr>";
    //Magische Konstanten
    echo __LINE__;


    ?>
</body>

</html>