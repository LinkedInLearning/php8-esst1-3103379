<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
    function areStringsEqual($string1, $string2) {
        if ($string1 === $string2) {
            return "Die Strings sind gleich.";
        } else {
            return "Die Zeichenketten sind nicht gleich.";
        }
    }
    // ruf die Funktion auf
    echo areStringsEqual("Hello", "Hello");
    ?>
</body>
</html>