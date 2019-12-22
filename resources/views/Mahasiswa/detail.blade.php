<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>DETAIL MAHASISWA!</h1>
    <ul>
        <li>
            NIM : {{ $mahasiswa->nim }} <br>
            Nama : {{ $mahasiswa->nama_mhs }} <br>
            Alamat : {{ $mahasiswa->alamat }} <br>
            IPK : {{ $mahasiswa->ipk  }}
        </li>
    </ul>
</body>
</html>