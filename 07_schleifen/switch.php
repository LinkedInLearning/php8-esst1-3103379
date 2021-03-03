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
    switch ($obst) {
        case "Apfel":
            echo "$obst ist ein heimisches Obst. ";
            break;
        case "Banane":
            echo "$obst ist eine Südfrucht. ";
            break;
        case "Orange":
            echo "$obst ist eine Zitrusfrucht. ";
            break;
    }
    ?>


</body>

</html>