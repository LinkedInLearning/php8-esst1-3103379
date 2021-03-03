<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $alter = 22;
    if ($alter < 18) {
        echo "nicht volljährig";
    }
    elseif ($alter == 18) {
        echo "genau 18";
    }
    else {
        echo "über 18";
    }


?>


</body>

</html>