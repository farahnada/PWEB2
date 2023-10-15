<?php

class HomeController
{
    public function home()
    {
        header("location:http://localhost/jobsheet5/index.php");
    }

    public function mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/Mahasiswa/index.php");
    }

    public function tambah()
    {
        header("location:http://localhost/jobsheet5/views/Mahasiswa/tambah.php");
    }

    public function edit()
    {
        header("location:http://localhost/jobsheet5/views/Mahasiswa/edit.php");
    }

    public function hapus()
    {
        header("location:http://localhost/jobsheet5/views/Mahasiswa/hapus.php");
    }
    
}
