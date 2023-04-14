<?php

$fibonacci = array();
$fibonacci[0] = 0;
$fibonacci[1] = 1;
$n = rand(0, 100);

for ($i = 2; $i < $n + 2; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

for ($i = 0; $i < $n; $i++) {
    echo $fibonacci[$i] . " ";
    if ($i > 0) {
        $ratio = $fibonacci[$i + 1] / $fibonacci[$i];
        echo number_format($ratio, 2, '.', '') . " ";
    }
}
echo "\n";
for ($i = 0; $i < $n; $i++) {
    if ($i > 0) {
        $ratio = $fibonacci[$i + 1] / $fibonacci[$i];
        echo "  " . number_format($ratio, 2, '.', '') . "\t";
    } else {
        echo "\t";
    }
}