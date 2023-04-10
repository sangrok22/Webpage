<?php
$n = 30;
$sum = 0;
$prod = 1;

for($i = 0; $i <= $n; $i++){
    $sum=$sum+$i;
}
for($i=1; $i<=$n; $i++){
    $prod=$prod*$i;
}

echo "<br>";

echo "전체 합: ", $sum, "<br>";
echo "전체 곱: ", $prod, "<br>";
?>