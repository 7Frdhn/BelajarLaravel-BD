<?php

namespace App\Http\Controllers;

use App\Models\Mguru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function tampil()
    {
        $guru = Mguru::all();
        return view('guru.index', compact('guru'));
    }

    public function tambah()
    {
        return view('guru.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nip' => 'required|string|max:10|unique:guru,nip',
            'nama_guru' => 'required|string|max:255',
            'alamat' => 'required',
            'status_guru' => 'required',
        ]);

        $guru = new Mguru();
        $guru->nip = $request->nip;
        $guru->nama_guru = $request->nama_guru;
        $guru->alamat = $request->alamat;
        $guru->status_guru = $request->status_guru;
        $guru->save();

        return redirect()->route('guru.tampil')->with('success', 'Data berhasil Disimpan!');
    }
    public function edit(string $nip)
    {
        $guru = Mguru::where('nip', $nip)->first();
        return view('guru.edit', compact('guru'));
    }
    
    public function simpan_edit(Request $request, $nip)
{
    $request->validate([
        'nama_guru'          => 'required|string|max:255',
        'alamat'        => 'required',
        'status_guru'        => 'required',
    ]);

    $guru = Mguru::where('nip', $nip)->first();

    $guru->nama_guru    = $request->nama_guru;
    $guru->alamat       = $request->alamat;
    $guru->status_guru  = $request->status_guru;
    $guru->save();

    return redirect()->route('guru.tampil')->with('success', 'Data berhasil diperbarui');
}

public function hapus($nip)
{
    $guru = Mguru::where('nip', $nip)->first();
    $guru->delete();
    return redirect()->route('guru.tampil')->with('success', 'Data siswa berhasil dihapus');
}


}
