<?php

$size = $_GET["size"];

echo "<table border='1'>";

echo "<tr>";
echo "<th>" . " " . "</th>";

for ($i = 1; $i <= $size; $i++){
    echo "<th>" . $i . "</th>";
}

echo "</tr>";

for ($i = 1; $i <= $size; $i++){
    echo "<tr>";
    echo "<th>" . $i . "</th>";
    for ($j = 1; $j <= $size; $j++){
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>