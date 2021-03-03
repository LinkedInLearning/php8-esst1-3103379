<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $preis1 = 0.17;
    $preis2 = 1 - 0.83;

    if ($preis1 == $preis2) {
        echo "gleich";
    } else {
        echo "nicht gleich";
    }
    echo "<hr>\n";

    if (abs($preis1 - $preis2) < 0.0001) {
        echo '$preis1 und $preis2 sind gleich.';
    } else {
        echo '$preis1 und $preis2 sind nicht gleich.';
    }
    ?>

</body>

</html>