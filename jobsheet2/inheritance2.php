<?php
//membuat superclass manusia
class manusia
{
    //properti public dan protected
    public $nama_saya;
    protected $jenis_kelamin;
    //method untuk panggil nama
    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
    //method untuk tampil jenis kelamin
    function tampilkan_jenis_kelamin()
    {
        //nilai kembalian
        return "Jenis kelamin saya perempuan";
    }
}
//class turunan atau subclass manusia
class mahasiswa extends manusia
{
    //properti public dan private
    public $nama_mahasiswa;
    private $nim = "220302034";
    //method
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
