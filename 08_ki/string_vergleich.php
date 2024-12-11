<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
    function compareStrings($string1, $string2) {
        if ($string1 === $string2) {
            return "The strings are equal.";
        } else {
            return "The strings are not equal.";
        }
    }
    // ruf die Funktion auf
    echo compareStrings("Hello", "Hello");
    ?>
</body>
</html>