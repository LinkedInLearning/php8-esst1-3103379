<?php
// Array mit Farbnamen und Hex-Codes
$colors = [
    "Rot" => "#FF0000",
    "Grün" => "#00FF00",
    "Blau" => "#0000FF",
    "Gelb" => "#FFFF00",
    "Orange" => "#FFA500",
    "Lila" => "#800080",
    "Cyan" => "#00FFFF",
    "Magenta" => "#FF00FF",
    "Schwarz" => "#000000",
    "Weiß" => "#FFFFFF",
];

// HTML-Ausgabe
echo "<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Farbnamen</title>
</head>
<body>";

foreach ($colors as $name => $hex) {
    echo "<p style='color: $hex;'>$name</p>";
}

echo "</body>
</html>";
?>
