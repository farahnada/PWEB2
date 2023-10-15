<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-3 py-3">
    <h3>Tambah Dosen</h3>
    <a class="btn btn-primary" href="dosen">Kembali</a>
    <br><br>
    <!-- <form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" value="simpan"></td>
        </tr>
    </table>
</form> -->
    <div style="width: 30%;">
        <form action="prosestambahdosen" method="post">
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">NIDN</label>
                <input type="text" id="disabledTextInput" name="nidn" class="form-control" placeholder="Masukkan NIDN">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nama</label>
                <input type="text" id="disabledTextInput" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
                <input type="text" id="disabledTextInput" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Agama</label>
                <input type="text" id="disabledTextInput" name="agama" class="form-control" placeholder="Masukkan Agama">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Alamat</label>
                <textarea id="disabledTextInput" name="alamat" cols="30" rows="5" class="form-control" placeholder="Masukkan Alamat"></textarea>
            </div>
            <tr>
                <td><input class="btn btn-success" type="submit" name="submit" value="simpan" </td>
            </tr>
        </form>
    </div>
</div>