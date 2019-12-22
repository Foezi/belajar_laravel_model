<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA!</h1>
    <ul>
    @foreach($mahasiswa as $mhs)
        <li>{{ $mhs->nama_mhs }} <a href="/{{ $mhs->nim }}"> Detail </a></li>
    @endforeach
    </ul>
</body>
</html>