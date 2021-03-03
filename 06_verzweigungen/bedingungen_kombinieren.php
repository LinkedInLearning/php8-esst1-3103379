<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $alter = 12;
    if ($alter > 17 ||  $alter <= 6) {
        echo "Mit $alter warscheinlich kein Schulkind. ";
    } else {
        echo "Mit $alter wahrscheinlich Schulkind. ";
    }
    echo "<hr>";

    if ($alter <= 17 && $alter >= 6) {
        echo "Mit $alter warscheinlich  Schulkind. ";
    } else {
        echo "Mit $alter wahrscheinlich kein Schulkind. ";
    }


    ?>


</body>

</html>