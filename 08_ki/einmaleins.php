<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        table td {
            font-family: sans-serif;
            border: 1px solid burlywood;
            padding: 0.4rem;
            text-align: right;
        }
        
    </style>
</head>

<body>
    <?php
    echo "<table>\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>\n";
        for ($j = 1; $j <= 10; $j++) {
            $erg = $i * $j;
            echo "<td>$erg</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>

</html>