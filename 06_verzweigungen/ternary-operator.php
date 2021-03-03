<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $i = 8;
    if ($i % 2 == 0) {
        $fazit = "gerade";
    } else {
        $fazit = "nicht gerade";
    }
    echo "Das Ergebnis: $fazit";

    echo "<hr>\n";

       $fazit = ($i % 2 == 0) ? "gerade" : "ungerade";
       echo "Das Ergebnis: $fazit";
    ?>

</body>

</html>