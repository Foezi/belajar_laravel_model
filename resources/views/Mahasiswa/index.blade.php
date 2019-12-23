<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA!</h1>
    <a href="/tambahMahasiswa">Tambah Mahasiswa</a>
    @if(session('status'))
        {{ session('status') }}
    @endif
    <ul>
    @foreach($mahasiswa as $mhs)
        <li>{{ $mhs->nama_mhs }} <a href="/detail/{{ $mhs->nim }}"> Detail </a> 
        <a href="/edit/{{ $mhs->nim }}"> Edit </a>
        
        <form action="/hapus/{{ $mhs->nim }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Hapus">
        </form>
        </li>
    @endforeach
    </ul>
</body>
</html>