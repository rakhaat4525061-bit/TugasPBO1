<?php
require_once 'mobil.php';

// 1. Instansiasi Objek valid
$toyota = new Mobil("Toyota Supra");

// 2. Perubahan sah
$toyota->mesin = "1200cc";
$toyota->rem = "bagus";

// Tampilkan properti
echo "Merk Mobil Anda adalah\t: " . $toyota->merk . "\n";
echo "Mesin Mobil Anda adalah\t: " . $toyota->mesin . "\n";
echo "Kondisi Rem Mobil Anda adalah\t: " . $toyota->rem . "\n\n";

// Operasi Valid
echo "--- Operasi Sah ---\n";
$toyota->mengerem();
$toyota->kondisimesin();
echo "\n";

// 3. Coba Operasi Tidak Sah 1 (Invarian Mesin Rusak)
echo "--- Uji Operasi Tidak Sah 1 (Mesin Rusak) ---\n";
try {
    $toyota->mesin = "rusak";
    $toyota->kondisimesin();
} catch (Exception $e) {
    echo $e->getMessage() . "\n\n";
}

// 4. Coba Operasi Tidak Sah 2 (Invarian Rem Blong)
echo "--- Uji Operasi Tidak Sah 2 (Rem Blong) ---\n";
try {
    $toyota->rem = "blong";
    $toyota->mengerem();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}