<?php

class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}
//class turunan atau subclass dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Farah Nada");
$informatika->panggil_mahasiswa("Syahidah");

//tampilkan isi properti
echo "Nama depan saya " . $informatika->nama_saya . "</br>";
echo "Nama belakang " . $informatika->nama_mahasiswa;
