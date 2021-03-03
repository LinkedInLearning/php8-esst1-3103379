<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $i = 22;
    $j = 22;
    if ($i === $j) {
        echo "=== stimmt";
    }
    echo "<hr>\n";
    if ($i == $j) {
        echo "== stimmt";
    }
    echo "<hr>\n";
    $i = "22";
    $j = 23;
    if ($i !== $j) {
        echo "!== stimmt";
    }
    echo "<hr>\n";
    if ($i != $j) {
        echo "!= stimmt";
    }
    


?>


</body>

</html>