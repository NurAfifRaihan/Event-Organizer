<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import model Daftar
use App\Models\Daftar;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftars = Daftar::all();
        return view('admin.daftar.index', [
            'daftars' => $daftars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'tanggal_daftar' => 'required',
            'alasan' => 'required',
            'nama_peserta' => 'required|min:5|max:25',
            'nama_kegiatan' => 'required',
            'kagiatan_peserta' => 'required',
        ]);

        Daftar::create($validated);
        return redirect('/dashboard/daftar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $daftar = Daftar::find($id);
        return view('admin.daftar.show', [
            'daftar' => $daftar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Mendapatkan data berdasarkan id
         $daftar = Daftar::find($id);
         return view('admin.daftar.edit', [
             'daftar' => $daftar
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendapatkan data berdasarkan id
        $daftar = Daftar::find($id);

        // Validasi form input
        $validated = $request->validate([
            'tanggal_daftar' => 'required',
            'alasan' => 'required',
            'nama_peserta' => 'required|min:5|max:25',
            'nama_kegiatan' => 'required',
            'kagiatan_peserta' => 'required',
        ]);

         // Update data
         $daftar->tanggal_daftar =$request->input('tanggal_daftar');
         $daftar->alasan =$request->input('alasan');
         $daftar->nama_peserta =$request->input('nama_peserta');
         $daftar->nama_kegiatan =$request->input('nama_kegiatan');
         $daftar->kagiatan_peserta =$request->input('kagiatan_peserta');
         $daftar->save();
 
         return redirect('/dashboard/daftar')->with('succes', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Mencari data berdasarkan ID
         $daftar = Daftar::find($id);

         // Hapus data berdasarrkan ID
         $daftar->delete();
         return redirect('/dashboard/daftar');
    }
}
