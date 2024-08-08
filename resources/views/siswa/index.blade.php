<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> <a href="{{ route ('siswa.create') }}">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nis }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->tgl_lahir }}</td>
                    <td>{{ $d->jk }}</td>
                    <td>{{ $d->prodi }}</td>
                    <td>
                        <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="{{ route('siswa.destroy', $d->id) }}">
                            @csrf
                            @method('DELETE')
                        <a href="{{ route('siswa.edit', $d->id) }}">Edit</a>
                        <button type="submit">Hapus</button>
                        </form>
                    </td>
                  
                    
                </tr>
            @endforeach`
        </tbody>
    </table>
</head>

<body>

</body>

</html>
