<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo "<pre>";
    var_dump(false ?: "Eins");
    var_dump(true ?: "Zwei");
    $erg = (2 ?: 4);
    echo $erg;
    echo "</pre>";
    ?>

</body>

</html>