<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    <?php
    $min = 1;
    $max = 6;
    $zaehler = 0;
    while (1) {
        $zahl1 = rand($min, $max);
        $zahl2 = rand($min, $max);
        echo "$zahl1 $zahl2<br>\n";
        $zaehler++;
        if ($zahl1 == $zahl2) {
            break;
        }
    }
    echo "Beim $zaehler. Versuch geklappt";
    ?>

</body>

</html>