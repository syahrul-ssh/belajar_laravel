<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>

<body>
    <h1>Belajar Laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
    <br>
    <p>Nama : {{$nama}}</p>
    <p>Mata Pelajaran</p>
    <ul>
        @foreach($matkul as $m)
        <li>{{$m}}</li>
        @endforeach
    </ul>
</body>

</html>