<?php

//membuat class mahasiswa
class mahasiswa
{
    //properti public dan private 
    public $nama;
    private $nim = "220302034";

    //public method
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama Saya Farah </br>";
    }

    //membuat protected method
    function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}

//instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $mahasiswa->tampilkan_nim();
