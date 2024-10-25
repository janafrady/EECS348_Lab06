<?php

$size = $_GET["size"];

echo "<table border='1'>";

for ($i = 1; $i <= $size; $i++){
    echo "<tr>";
    for ($j = 1; $j <= $size; $j++){
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>