<?php

namespace App\Http\Controllers;

use App\Models\Msiswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Msiswa::get();
        return view('siswa.index', compact('siswa'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nis'           => 'required|string|unique:siswa,nis',
            'nama'          => 'required|string|max:255',
            'alamat'          => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|in:Laki-laki,Perempuan',
            'prodi' => 'required',
        ]);
    

        Msiswa::create([
            'nis'           => $request->nis,
            'nama'    => $request->nama,
            'alamat'    => $request->alamat,
            'tgl_lahir' => $request->tanggal_lahir,
            'jk' => $request->jenis_kelamin,
            'prodi' => $request->prodi,
           
        ]);
        return redirect()->route('siswa.index')->with('success', 'Data siswaberhasildisimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Msiswa $msiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Msiswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
	$request->validate([
       
        'nama'          => 'required|string|max:255',
        'alamat'          => 'required|string|max:255',
        'tgl_lahir' => 'required|date',
        'jk' => 'required|in:Laki-laki,Perempuan',
        'prodi' => 'required',
	]);

	$siswa = Msiswa::findOrFail($id);

	$siswa->update([
       
        'nama'    => $request->nama,
        'alamat'    => $request->alamat,
        'tgl_lahir' => $request->tgl_lahir,
        'jk' => $request->jk,
        'prodi' => $request->prodi,
	]);

	return redirect()->route('siswa.index')->with('success', 'Data siswaberhasildiupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
    $siswa = Msiswa::findOrFail($id);
    $siswa->delete();
    return redirect()->route('siswa.index')->with('success', 'Data siswaberhasildihapus');
    }
    
}
