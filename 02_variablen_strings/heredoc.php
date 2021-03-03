<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $vorname = "Vincent";
    $alter = 23;
    echo <<<DOC
    <table class="table table-success table-hover">
      <tr>
        <th>Name</th>
        <th>Alter</th>
      </tr>
      <tr>
        <td>$vorname</td>
        <td>$alter</td>
      </tr>
    </table>
    DOC;
    ?>
</body>

</html>