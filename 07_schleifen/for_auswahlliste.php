<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    <?php
    echo "<select name='alter'>\n";
    for ($min = 1, $max = 10; $min < 70; $min += 10, $max += 10) {
        echo "<option>$min - $max</option>\n";
    }
    echo "</select>\n";
    ?>

</body>

</html>