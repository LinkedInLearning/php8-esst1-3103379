<?php
$navigation = [
    "index.php" => "Start",
    "service.php"  => "Service",
    "impressum.php" => "Impressum"
];
echo "<ul>";
foreach($navigation as $nav => $titel) {
    echo "<li><a href='$nav'>$titel</a></li>\n";

}
echo "</ul>";