<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $name = $_POST["name"] ?? "Namenlos";
    echo "Hallo $name";
    ?>


</body>

</html>