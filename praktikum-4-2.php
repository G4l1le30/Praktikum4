<?php
function tambahBilangan($a, $b) {
    return $a + $b;
}

$hasil1 = tambahBilangan(5, 7);
$hasil2 = tambahBilangan(15, 25);

echo "Hasil Penjumlahan Pertama: " . $hasil1 . "\n";
echo "<br/>";
echo "Hasil Penjumlahan Kedua: " . $hasil2 . "\n";
echo "<br/>";

function hitungPanjangString($str) {
    return strlen($str);
}

$kata1 = "Walter";
$kata2 = "White";
$panjang1 = hitungPanjangString($kata1);
$panjang2 = hitungPanjangString($kata2);


echo "Panjang String \"$kata1\": " . $panjang1 . "<br>";
echo "Panjang String \"$kata2\": " . $panjang2 . "<br>";
?>