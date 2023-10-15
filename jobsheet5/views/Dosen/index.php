<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();
$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<h3>Data Dosen</h3>
<a class="btn btn-primary" href="tambahdosen">Tambah Dosen</a>
<br><br>
<table class="table table-striped table-bordered" style="text-align:center">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    // foreach ($db->tampil_mahasiswa() as $x) {
    foreach ($dosen as $x) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['jenis_kelamin'] ?></td>
            <td><?php echo $x['agama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="editdosen/<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapusdosen/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>