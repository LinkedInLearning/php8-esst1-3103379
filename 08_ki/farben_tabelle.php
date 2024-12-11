<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   echo "<table>";
   for ($rowIndex = 0; $rowIndex < 10; $rowIndex++) {
       echo "<tr>";
       for ($colIndex = 0; $colIndex < 10; $colIndex++) {
           $hex = sprintf("#%06X", random_int(0, 0xFFFFFF));
           echo "<td style='background-color: $hex;'>$hex</td>";
       }
       echo "</tr>";
   }
   echo "</table>";
    
    ?>
</body>
</html>