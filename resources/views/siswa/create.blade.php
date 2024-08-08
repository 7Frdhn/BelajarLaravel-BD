<form method="POST" action="{{ route('siswa.store') }}">
    @csrf
    NIS :<input type="text" name="nis" required>
    <br /><br>
    Nama Siswa :<input type="text" name="nama" required>
    @error('nis')
        {{ $message }}
    @enderror
    <br /><br>
    Alamat:
    <textarea name="alamat"></textarea>
    <br><br>
    TanggalLahir :<input type="date" name="tanggal_lahir" required>
    <br><br>
    Jenis Kelamin :
    <select name="jenis_kelamin" required>
        <option value="">------Pilih-------</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br /><br>
    Prodi :
    <select name="prodi" required>
        <option value="">------Pilih-------</option>
        <option value="rpl">Rekayasa</option>
        <option value="mm">Multimedia</option>
        <option value="tkj">Teknik Jaringan</option>
    </select>
    <br /><br />
    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>
</form>
