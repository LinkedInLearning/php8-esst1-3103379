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
    echo "<ol>";
    foreach($obst as $o) {
         echo "<li>$o</li>\n";
    }
    echo "</ol>";
    ?>
</body>

</html>