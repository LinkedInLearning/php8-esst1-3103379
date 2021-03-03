<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $obst = "Apfel";

    echo match ($obst) {
        "Apfel" => "$obst ist ein heimisches Obst",
        "Banane" => "$obst ist eine Südfrucht",
        "Orange" => "$obst ist eine Zitrusfrucht",
        default => "kenne ich nicht"
    };

    ?>


</body>

</html>