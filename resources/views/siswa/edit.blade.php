<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
        @csrf
        @method('PUT')
       
        <br>
        Nama Siswa :
        <input type="text" name="nama" required value="{{ old('nama', $siswa->nama) }}">
        <br /><br>
        Alamat
        <textarea name="alamat">{{ old('alamat', $siswa->alamat) }}</textarea>
        <br>
        <br>
        TanggalLahir :
        <input type="date" name="tgl_lahir" required value="{{ old('tgl_lahir', $siswa->tgl_lahir) }}">
        <br>
        <br />
        Jenis Kelamin :
        <select name="jk" required>
            <option value="">~Pilih~</option>
            <option value="Laki-laki" {{ $siswa->jk == 'Laki-laki' ? 'selected' : '' }}>
                Laki-laki
            </option>
            <option value="Perempuan" {{ $siswa->jk == 'Perempuan' ? 'selected' : '' }}>
                Perempuan
            </option>
        </select>
        <br /><br>

        Prodi :
        <select name="prodi" required>
            <option value="">~Pilih~</option>
            <option value="rpl" {{ $siswa->prodi == 'rpl' ? 'selected' : '' }}>
                Rekayasa
            </option>
            <option value="mm" {{ $siswa->prodi == 'mm' ? 'selected' : '' }}>
                Multimedia
            </option>
            <option value="tkj" {{ $siswa->prodi == 'tkj' ? 'selected' : '' }}>
                Teknik Jaringan
            </option>
        </select>

        <br /><br />
        <button type="submit">Simpan</button>
       
    </form>
    <a href="{{ route('siswa.index') }}">Kembali</a>

</body>

</html>
