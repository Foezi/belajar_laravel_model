<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa!</h1>
    <form action="/proseEditMahasiswa/{{ $mahasiswa->nim }}" method="post">
    @method('patch')
    @csrf
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="{{ $mahasiswa->nim }}">
            @error('nim')
                {{ $message }}
            @enderror
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="nama_mhs" value="{{ $mahasiswa->nama_mhs }}">
            @error('nama_mhs')
                {{ $message }}
            @enderror
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="{{ $mahasiswa->alamat }}"></td>
        </tr>
        <tr>
            <td>IPK</td>
            <td><input type="text" name="ipk" value="{{ $mahasiswa->ipk }}"></td>
        </tr>
        <tr>
            <td colspan=2>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>