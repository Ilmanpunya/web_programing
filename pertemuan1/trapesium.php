<?php

echo "<h3> Menghitung Luas Trapesium <h3/>";

$a = 15;
$b = 15;
$c = 7;
$d = 7;
$tinggi = 10;

$keliling = $a + $b + $c + $d;
$luas = $a + $b/2 * $tinggi;

echo "A = ". $a;
echo "<br/>";
echo "B = ". $b;
echo "<br/>";
echo "C = ". $c;
echo "<br/>";
echo "D = ". $d;
echo "<br/>";
echo "Tinggi = ". $tinggi;
echo "<br/>";
echo "Kelilling = ". $keliling;
echo "<br/>";
echo "Luas = ". $luas;
?>