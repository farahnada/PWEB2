<?php
include '../classes/database_dosen.php';

$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dsn.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dsn.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_dsn.php");
}
