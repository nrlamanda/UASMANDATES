<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = Pasien::orderBy('nama')->paginate(8);
        return view('index', ['pasiens' => $pasiens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokters = Dokter::orderBy('nama')->get();
        return view('tambah', ['dokters' => $dokters]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'dokter_id' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);

        Pasien::create($validateData);
        return redirect(route('pasien.index'))->with('success', "Berhasil menambahkan data $request->nama sebagai pasien");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $dokters = Dokter::orderBy('nama')->get();
        return view('ubah', [
            'dokters' => $dokters,
            'pasien' => $pasien,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'dokter_id' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);

        $pasien->update($validateData);
        return redirect(route('pasien.index'))->with('success', "Berhasil mengubah data $request->nama sebagai pasien");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect(route('pasien.index'))->with('success', "Berhasil menghapus data $pasien->nama sebagai pasien");
    }
}
