<?php
class manusia
{
    public $nama_saya;
    protected $jenis_kelamin;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
    function tampilkan_jenis_kelamin()
    {
        //nilai kembalian
        return "Jenis kelamin saya perempuan";
    }
}
//class turunan atau subclass manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    private $nim = "220302034";

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
    function tampilkan_nim()
    {
        //nilai kembalian
        return $this->nim;
    }
}
//intansiasi class mahasiswa
$informatika = new mahasiswa();
$nim = new mahasiswa();

$informatika->panggil_nama("Farah Nada");
$informatika->panggil_mahasiswa("Syahidah");

//tampilkan isi dari properti
echo "Nama Depan Saya : " . $informatika->nama_saya . "</br>";
echo "Nama Belakang Saya : " . $informatika->nama_mahasiswa  . "</br>";
echo $informatika->tampilkan_jenis_kelamin() . "</br>";
echo "NIM Saya : " . $nim->tampilkan_nim();
