<?php
$prodi = [
    'Teknik Informatika', 
    'Teknik Komputer', 
    'Ilmu Komputer', 
    'Sistem Informasi', 
    'Teknologi Informasi', 
    'Pendidikan Teknologi Informasi'
];

echo "Daftar Program Studi: <br/>";
foreach ($prodi as $index => $program_studi) {
    echo "Prodi " . ($index + 1) . ": " . $program_studi . "<br/>"; 
}

$mahasiswa = [
    'nama' => 'Joshua', 
    'umur' => 19, 
    'prodi' => 'Teknik Informatika', 
    'semester' => 4, 
    'ipk' => 4.0
];

echo "Informasi Mahasiswa: <br/>";
foreach ($mahasiswa as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br/>";
}
?>