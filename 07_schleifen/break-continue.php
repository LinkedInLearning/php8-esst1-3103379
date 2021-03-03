<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            continue;
        }
        echo "$i. Durchlauf<br >\n";
        if ($i == 5) {
            break;
        }
    }
    ?>

</body>

</html>