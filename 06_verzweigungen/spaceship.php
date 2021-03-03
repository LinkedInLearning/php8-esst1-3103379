<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $a = 4;
    $b = 22;
    echo "$a <=> $b: " . ($a <=> $b) . "<hr>";
    echo "$a <=> $a: " . ($a <=> $a) . "<hr>";
    echo "$b <=> $a: " . ($b <=> $a) . "<hr>";


    ?>


</body>

</html>