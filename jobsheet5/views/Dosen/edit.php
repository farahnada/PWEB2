<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                //berhasil
                header("location:/jobsheet5/dosen");
                //gagal
            } else {
                header("location:editdosen");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-3 py-3">
    <h3>Edit Data Dosen</h3>
    <a class="btn btn-primary" href="/jobsheet5/dosen">Kembali</a>
    <br><br>
    <?php
    if ($dosenData) {
    ?>
        <div style="width: 30%;">
            <form action="" method="post">
                <?php
                foreach ($dosenData as $d) {
                ?>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIDN</label>
                        <input type="hidden" id="disabledTextInput" name="id" class="form-control" placeholder="" value="<?php echo $d['id'] ?>">
                        <input type="text" id="disabledTextInput" name="nidn" class="form-control" placeholder="" value="<?php echo $d['nidn'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" name="nama" class="form-control" placeholder="" value="<?php echo $d['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
                        <input type="text" id="disabledTextInput" name="jenis_kelamin" class="form-control" placeholder="" value="<?php echo $d['jenis_kelamin'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Agama</label>
                        <input type="text" id="disabledTextInput" name="agama" class="form-control" placeholder="" value="<?php echo $d['agama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <textarea id="disabledTextInput" name="alamat" cols="30" rows="5" class="form-control" placeholder=""><?php echo $d['alamat'] ?></textarea>
                    </div>
                    <tr>
                        <td><input class="btn btn-success" name="submit" type="submit" value="simpan" </td>
                    </tr>
                <?php
                }
                ?>
            </form>
        </div>
    <?php
    }
    ?>
</div>