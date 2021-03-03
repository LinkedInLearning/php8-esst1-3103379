<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <ul>
    <?php
    // foreach ($_SERVER as $k => $v) {
    //     echo "<li>$k: $v</li>\n";
    // }
    echo $_SERVER["PHP_SELF"];
    ?>
    </ul>
</body>

</html>