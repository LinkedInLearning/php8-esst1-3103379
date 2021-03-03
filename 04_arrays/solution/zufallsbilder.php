<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $bilder = [
        [
            "pfad" => "blumen.jpg",
            "alt" => "rote Blumen",
            "titel" => "Strauß aus roten Blumen"
        ],
        [
            "pfad" => "landschaft.jpg",
            "alt" => "Landschaft",
            "titel" => "Landschaft im Nebel"
        ],
        [
            "pfad" => "stadt_am_meer.jpg",
            "alt" => "Häuser",
            "titel" => "Griechische Häuser am Abend"
        ],
        [
            "pfad" => "strand.jpg",
            "alt" => "Strand",
            "titel" => "Strand mit Bergen"
        ],
        [
            "pfad" => "boot.jpg",
            "alt" => "Boot",
            "titel" => "Boot auf einem Felsen"
        ]
    ];
    //echo $bilder[2]['pfad'];


    $zufallszahl = array_rand($bilder);
    echo "<img src='{$bilder[$zufallszahl]['pfad']}' 
               height='200' 
               width='150' 
               alt='{$bilder[$zufallszahl]['alt']}'
               title='{$bilder[$zufallszahl]['titel']}' >\n";
    //Alternative Schreibweise
    echo '<img src="' 
        . $bilder[$zufallszahl]["pfad"] 
        . '" height="200" width="150" alt="' 
        . $bilder[$zufallszahl]["alt"] 
        . '" title="' 
        . $bilder[$zufallszahl]["titel"] .
        '">';

    ?>
</body>

</html>