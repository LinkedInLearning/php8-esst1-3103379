<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $obst = ["Apfel", "Birne", "Banane"];
    //$obst = array("Apfel", "Birne", "Banane");
    //echo $obst[0];
    $obst[] = "Orange";
    echo $obst[3];
    echo "<hr>";
    echo "<pre>";
    print_r($obst);
    echo "</pre>";
    echo "<pre>";
    var_dump($obst);
    echo "</pre>";
    ?>
</body>

</html>