<?php
function tambahBilangan($a, $b) {
    return $a + $b;
}
$int1=5;
$int2=7;
$int3=15;
$int4=30;
$hasil1 = tambahBilangan($int1, $int2);
$hasil2 = tambahBilangan($int3, $int4);

echo "Hasil Penjumlahan \"$int1\" dan \"$int2\": " . $hasil1 . "\n";
echo "<br/>";
echo "Hasil Penjumlahan \"$int3\" dan \"$int4\": " . $hasil2 . "\n";
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