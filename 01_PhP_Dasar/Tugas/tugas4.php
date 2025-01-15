 <!-- 
Tugas 4
 Buatlah program untuk menghitung volume dari prisma segitiga dengan menentukan nilai awal
 Contoh :
 a = 5
 b = 3
 t = 10
 volume dari prisma segitiga adalah ... cm 
 -->

 <?php

function calculateTriangularPrismVolume($a, $b, $t) {

    $triangleBaseArea = 0.5 * $a * $b;
    
    $volume = $triangleBaseArea * $t;
    
    return $volume;
}

// Nilai awal
$a = 2;
$b = 4; 
$t = 15;

$volume = calculateTriangularPrismVolume($a, $b, $t);


echo "Volume dari prisma segitiga adalah $volume cm\n";
?>
