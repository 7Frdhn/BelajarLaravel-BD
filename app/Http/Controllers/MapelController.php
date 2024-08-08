<?php

namespace App\Http\Controllers;

use App\Models\Mmapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function tampil()
    {
        $mapel = Mmapel::all();
        return view('mapel.index', compact('mapel'));
    }

    public function tambah()
    {
        return view('mapel.create');
    }

    

    public function simpan(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'required|string|max:10|unique:mapel,kode_mapel',
            'nama_mapel' => 'required|alpha|max:255',
            'singkatan' => 'required|max:5',
            'kelas' => 'required|in:X, XI, XII',
            'pengajar' => 'required',
            'prodi' => 'required|alpha',

        ]);

        $mapel = new Mmapel();
        $mapel->kode_mapel = $request->kode_mapel;
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->singkatan = $request->singkatan;
        $mapel->kelas = $request->kelas;
        $mapel->pengajar = $request->pengajar;
        $mapel->prodi = $request->prodi;
        $mapel->save();

        return redirect()->route('mapel.tampil')->with('success', 'Data berhasil Disimpan!');
    }
    public function edit(string $kode_mapel)
    {
        $mapel = Mmapel::where('kode_mapel', $kode_mapel)->first();
        return view('mapel.edit', compact('mapel'));
    }


    public function simpan_edit(Request $request, $kode_mapel)
    {
        $request->validate([
            'nama_mapel' => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u|max:255',
            'singkatan' => 'required|max:5',
            'kelas' => 'required|in:X, XI, XII',
            'pengajar' => 'required',
            'prodi' => 'required|alpha',
        ]);
    
        $mapel = Mmapel::where('kode_mapel', $kode_mapel)->first();
    
        $mapel->nama_mapel    = $request->nama_mapel;
        $mapel->singkatan       = $request->singkatan;
        $mapel->kelas  = $request->kelas;
        $mapel->pengajar  = $request->pengajar;
        $mapel->prodi  = $request->prodi;
        $mapel->save();
    
        return redirect()->route('mapel.tampil')->with('success', 'Data berhasil diperbarui');
    }
    
    public function hapus($kode_mapel)
    {
        $mapel = Mmapel::where('kode_mapel', $kode_mapel)->first();
        $mapel->delete();
        return redirect()->route('mapel.tampil')->with('success', 'Data siswa berhasil dihapus');
    }
    
    

}
