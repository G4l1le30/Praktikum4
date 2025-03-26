<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Properti class
    public $nim;
    public $nama;
    public $prodi;

    // Constructor untuk inisialisasi properti
    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    // Method kuliah
    public function kuliah() {
        return $this->nama . " sedang mengikuti perkuliahan di program studi " . $this->prodi . "<br/>";
    }

    // Method ujian
    public function ujian() {
        return $this->nama . " sedang mengikuti ujian dengan NIM " . $this->nim . "<br/>";
    }

    // Method praktikum
    public function praktikum() {
        return $this->nama . " sedang melaksanakan praktikum <br/>";
    }
}

// Membuat 2 objek Mahasiswa dengan properti berbeda
$mahasiswa1 = new Mahasiswa("235150201111037", "Mark Grayson", "Teknik Informatika");
$mahasiswa2 = new Mahasiswa("235150207111022", "Samantha Eve", "Sistem Informasi");

// Memanggil methods pada masing-masing objek
echo "Mahasiswa 1:";
echo "<br/>";
echo $mahasiswa1->kuliah() . "\n";
echo $mahasiswa1->ujian() . "\n";
echo $mahasiswa1->praktikum() . "\n\n";
echo "<br/>";
echo "Mahasiswa 2:";
echo $mahasiswa2->kuliah() . "\n";
echo $mahasiswa2->ujian() . "\n";
echo $mahasiswa2->praktikum() . "\n";
?>
