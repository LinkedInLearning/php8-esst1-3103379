<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farbentabelle</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Farbentabelle</h1>
    <?php
    $colors = [
        ["name" => "Red", "hex" => "#FF0000"],
        ["name" => "Green", "hex" => "#008000"],
        ["name" => "Blue", "hex" => "#0000FF"],
        ["name" => "Yellow", "hex" => "#FFFF00"],
        ["name" => "Cyan", "hex" => "#00FFFF"],
        ["name" => "Magenta", "hex" => "#FF00FF"],
        ["name" => "Orange", "hex" => "#FFA500"],
        ["name" => "Purple", "hex" => "#800080"],
        ["name" => "Brown", "hex" => "#A52A2A"],
        ["name" => "Pink", "hex" => "#FFC0CB"],
    ];
    ?>
    <table>
        <tr>
            <th>Farbe</th>
            <th>Farbname</th>
            <th>Hexcode</th>
        </tr>
        <?php foreach ($colors as $color): ?>
        <tr>
            <td style="background-color: <?= $color['hex']; ?>;"></td>
            <td><?= $color['name']; ?></td>
            <td><?= $color['hex']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
