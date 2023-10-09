<?php

//membuat class
class dosen
{
    //menuliskan properti
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Farah";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        //isi method
    }
}

//membuat objek nama_dosen
$nama_dosen = new dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();
