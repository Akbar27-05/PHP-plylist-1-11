<?php 
echo "<h1>"."operator arimatika"."</h1>";

$a = 9;
$b = 5;

echo "penjumblahan"."<br>";
$c = $a + $b;
echo "Hasil dari $a + $b adalah =". $c. "<br><br>";

echo "pengurangan"."<br>";
$c = $a - $b;
echo "Hasil dari $a - $b adalah =". $c. "<br><br>";

echo "perkalian"."<br>";
$c = $a * $b;
echo "Hasil dari $a * $b adalah =". $c. "<br><br>";

echo "pembagian"."<br>";
$c = $a / $b;
echo "Hasil dari $a / $b adalah =". $c. "<br><br>";

echo "pembagian (pembulatan ke atas, semisal hasil ada koma(,))"."<br>";
$c = $a / $b;
echo "Hasil dari $a / $b adalah =". round($c). "<br><br>";

echo  "pembagian (pembulatan ke bawah, semisal hasil ada koma(,))"."<br>";
$c = $a / $b;
echo "Hasil dari $a / $b adalah =". floor ($c). "<br><br>";

echo "modulus"."<br>";
$c = $a % $b;
echo "Hasil dari modulus $a % $b adalah =". $c. "<br><br>";

echo "<hr>";
echo "<h1>"."operator logika"."</h1>";

echo "perbandingan (<)"."<br>";
$c = $a < $b;
echo "Apakah $a Lebih kecil dari $b =". $c. "<br><br>";

echo "perbandingan (>)"."<br>";
$c = $a > $b;
echo "Apakah $a Lebih besar dari $b =". $c. "<br><br>";

echo "persamaan (==)"."<br>";
$c = $a == $b;
echo "Apakah nilai $a Sama dengan $b =". $c. "<br><br>";

echo "tidak sama dengan (!=)"."<br>";
$c = $a != $b;
echo "Apakah nilai $a tidak sama dengan $b =". $c. "<br><br>";

echo "<hr>";
echo "<h1>"."increment"."</h1>";

$a++; // nilai di + 1
echo $a. "<br>";

$a--; // nilai di - 1
echo $a. "<br>";

echo "<hr>";
echo "<h1>"."oprator string"."</h1>";

$fkota = "Sura";
$lkota = "Baya";

$hasil = $fkota.$lkota . " Kota Pahlawan";

echo $hasil;
