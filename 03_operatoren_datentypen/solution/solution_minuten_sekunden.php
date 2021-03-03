<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
      $sekunden = 200;
      $minuten = $sekunden / 60;
     
     // $minuten = floor($minuten);
    $minuten = ($sekunden - $sekunden % 60) / 60 % 60;
      //echo $minuten;
      $restsekunden = $sekunden % 60;
      //echo $restsekunden;
    //   echo "$sekunden Sekunden sind $minuten Minuten und $restsekunden Sekunden";
      echo $sekunden . " Sekunden sind " . $minuten . " Minuten und " .   $restsekunden . " Sekunden<br>\n";




    ?>
</body>

</html>