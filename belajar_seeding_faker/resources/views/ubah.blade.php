<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD Laravel</title>
</head>

<body>
    <h2>SyahrulNgoding</h2>
    <h3>Ubah Pegawai</h3>

    <a href="/pegawai">Kembali</a>

    <br>
    <br>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" , value="{{$p->pegawai_id}}">
        Nama <input type="text" name="nama" required="required" value="{{$p->pegawai_nama}}"> <br>
        Jabatan <input type="text" name="jabatan" required="required" value="{{$p->pegawai_jabatan}}"> <br>
        umur <input type="text" name="umur" required="required" value="{{$p->pegawai_umur}}"> <br>
        Alamat <textarea type="text" name="alamat" required="required">{{$p->pegawai_alamat}} </textarea> <br>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>

</html>