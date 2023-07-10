<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import model Kegiatan
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('admin.kegiatan.index', [
            'kegiatans' => $kegiatans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi form input
         $validated = $request->validate([
            'judul' => 'required',
            'kapasitas' => 'required',
            'harga_tiket' => 'required',
            'tanggal' => 'required',
            'narasumber' => 'required',
            'tempat' => 'required',
            'jenis_kegiatan' => 'required',
        ]);

        Kegiatan::create($validated);
        return redirect('/dashboard/kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('admin.kegiatan.show', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Mendapatkan data berdasarkan id
         $kegiatan = Kegiatan::find($id);
         return view('admin.kegiatan.edit', [
             'kegiatan' => $kegiatan
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendapatkan data berdasarkan id
        $kegiatan = Kegiatan::find($id);

        // Validasi form input
        $validated = $request->validate([
            'judul' => 'required',
            'kapasitas' => 'required',
            'harga_tiket' => 'required',
            'tanggal' => 'required',
            'narasumber' => 'required',
            'tempat' => 'required',
            'jenis_kegiatan' => 'required',
        ]);

        $kegiatan->judul =$request->input('judul');
         $kegiatan->kapasitas =$request->input('kapasitas');
         $kegiatan->harga_tiket =$request->input('harga_tiket');
         $kegiatan->tanggal =$request->input('tanggal');
         $kegiatan->narasumber =$request->input('narasumber');
         $kegiatan->tempat =$request->input('tempat');
         $kegiatan->jenis_kegiatan =$request->input('jenis_kegiatan');
         $kegiatan->save();
 
         return redirect('/dashboard/kegiatan')->with('succes', 'Data Berhasi Di Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Mencari data berdasarkan ID
         $kegiatan = Kegiatan::find($id);

         // Hapus data berdasarrkan ID
         $kegiatan->delete();
         return redirect('/dashboard/kegiatan');
    }
}
