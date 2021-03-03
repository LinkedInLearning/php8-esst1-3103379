<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    // $farben = [
    //     "rot"  => "#FF0000",
    //     "grün" => "#00FF00",
    //     "blau" => "#0000FF"
    // ];
    $farben = array(
        "rot"  => "#FF0000",
        "grün" => "#00FF00",
        "blau" => "#0000FF"
    );
    $farben["schwarz"] = "#000000";
    //echo $farben["grün"];
    foreach ($farben as $k => $v) {
        echo "$k: $v<br>";

    }
    ?>
</body>

</html>