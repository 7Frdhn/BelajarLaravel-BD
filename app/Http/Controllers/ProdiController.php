<?php

namespace App\Http\Controllers;

use App\Models\Mprodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Mprodi::get();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'kode_prodi'           => 'required|string|unique:prodi,kode_prodi',
           'nama_prodi'         => 'required|string|max:255',
           'ketua_prodi'        => 'required|string|max:255',
           'status_prodi' => 'required|in:aktif, tidak aktif',
           'mulai_aktif' => 'required|date',
        ]);

        Mprodi::create([
            'kode_prodi'   => $request->kode_prodi,
            'nama_prodi'    => $request->nama_prodi,
            'ketua_prodi'    => $request->ketua_prodi,
            'status_prodi' => $request->status_prodi,
            'mulai_aktif'    => $request->mulai_aktif,
           
        ]);
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil Di Simpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mprodi $mprodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Mprodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi = Mprodi::findorFail($id);
        $request->validate([
        
           'nama_prodi'         => 'required|string|max:255',
           'ketua_prodi'        => 'required|string|max:255',
           'status_prodi' => 'required|in:aktif,tidak aktif',
           'mulai_aktif' => 'required|date',
        ]);

        $prodi->update([
            'nama_prodi'    => $request->nama_prodi,
            'ketua_prodi'    => $request->ketua_prodi,
            'status_prodi' => $request->status_prodi,
            'mulai_aktif'    => $request->mulai_aktif,
           
        ]);
        return redirect()->route('prodi.index')->with('success', 'Data Berhasil Di Simpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus( string $id)
    {
    $prodi = Mprodi::findOrFail($id);
    $prodi->delete();
    return redirect()->route('prodi.index')->with('success', 'Data Berhasil Di Simpan!');
    }
}
