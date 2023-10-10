<?php

//membuat class mahasiswa
class mahasiswa
{
    //menuliskan properti
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Farah";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        //isi method
        return "Alamat saya di Desa Rowokele";
    }
}

//membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo "</br>";
echo $nama_mahasiswa->tampil_alamat();
