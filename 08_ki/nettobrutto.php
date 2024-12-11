<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    function nettoBrutto($netto, $steuersatz) {
        $brutto = $netto * (1 + $steuersatz / 100);
        return $brutto;
    }
    // bitte ruf die Funktion auf
    echo nettoBrutto(100, 19);

    ?>
    
</body>
</html>