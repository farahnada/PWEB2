<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<h3>Data Mahasiswa</h3>
<a class="btn btn-primary" href="tambah">Tambah Mahasiswa</a>
<br><br>
<table class="table table-striped table-bordered" style="text-align:center">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    // foreach ($db->tampil_mahasiswa() as $x) {
    foreach ($mahasiswa as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>