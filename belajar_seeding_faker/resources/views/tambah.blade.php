<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD Laravel</title>
</head>

<body>
    <h2>SyahrulNgoding</h2>
    <h3>Tambah Pegawai</h3>

    <a href="/pegawai">Kembali</a>

    <br>
    <br>

    <form action="/pegawai/store" method="post">
        {{csrf_field()}}
        Nama <input type="text" name="nama" required="required"> <br>
        Jabatan <input type="text" name="jabatan" required="required"> <br>
        umur <input type="text" name="umur" required="required"> <br>
        Alamat <input type="text" name="alamat" required="required"> <br>
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>