<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $alamat);

            if ($result) {
                //berhasil
                header("location:/jobsheet5/mahasiswa");
                //gagal
            } else {
                header("location:edit");
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
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-3 py-3">
    <h3>Edit Data Mahasiswa</h3>
    <a class="btn btn-primary" href="/jobsheet5/mahasiswa">Kembali</a>
    <br><br>
    <?php
    if ($mahasiswaData) {
    ?>
        <div style="width: 30%;">
            <form action="" method="post">
                <?php
                foreach ($mahasiswaData as $d) {
                ?>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIM</label>
                        <input type="hidden" id="disabledTextInput" name="id" class="form-control" placeholder="" value="<?php echo $d['id'] ?>">
                        <input type="text" id="disabledTextInput" name="nim" class="form-control" placeholder="" value="<?php echo $d['nim'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" name="nama" class="form-control" placeholder="" value="<?php echo $d['nama'] ?>">
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