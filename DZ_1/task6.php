<?php
echo  "<table>";
echo "<tr><td></td>";

for ($h = 1; $h < 10; $h++) {
    echo  "<td>" . $h . "</td>";
}

echo  "</tr>";

for ($i = 1; $i < 10; $i++) {
    echo  "<tr>";
    echo  "<td>" . $i . "</td>";
    for ($j = 1; $j < 10; $j++) {
        echo  "<td>";
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "(" . $i * $j . ")";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "[" . $i * $j . "]";
        } else {
            echo $i * $j;
        }
        echo  "</td>";
    }
    echo  "</tr>";
}
echo  "</table>";
