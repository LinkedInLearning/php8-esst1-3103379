<?php
date_default_timezone_set("Europe/Berlin");
$uhrzeit = date("H");
$uhrzeit = 4;

if ($uhrzeit < 5 || $uhrzeit > 21) {
    $farbe = "blue";
    $gruss = "Gute Nacht";
} elseif ($uhrzeit < 11) {
    $farbe = "orange";
    $gruss = "Guten Morgen";
} elseif ($uhrzeit < 15) {
    $farbe = "red";
    $gruss = "Guten Mittag";
} elseif ($uhrzeit < 18) {
    $farbe = "green";
    $gruss = "Guten Nachmittag";
} else {
    $farbe = "pink";
    $gruss = "Guten Abend";
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            background-color: <?php echo $farbe; ?>;
        }
    </style>
</head>

<body>
    <?php
    echo "Aktuelle Stunde $uhrzeit, d.h. ";
    echo $gruss;
    ?>

</body>

</html>