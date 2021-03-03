<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
</head>

<body>
    <?php
    for($i = 1; $i <= 4; $i++) {
        echo "$i. Du bist gut! <br>";
    }
    echo "<hr>";
    for($i = 1; $i <= 4; $i++) :
        echo "$i. Du bist gut! <br>";
    endfor;
    ?>

</body>

</html>