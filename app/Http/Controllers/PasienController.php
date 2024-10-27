<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = Pasien::leftJoin('rumah_sakits', 'pasiens.rumah_sakit_id', '=', 'rumah_sakits.id')
            ->select('pasiens.*', 'rumah_sakits.nama as rumah_sakit')
            ->get();
        return view('pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rumahSakits = RumahSakit::all();

        return view('pasien.create')->with('rumahSakits', $rumahSakits);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->only([
            'nama',
            'alamat',
            'email',
            'telepon',
            'rumah_sakit_id',
        ]);

        Pasien::create($request->all());
        return redirect()->route('pasien.index')->with('success', 'Data Pasien berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $rumahSakits = RumahSakit::all();

        return view('pasien.edit', compact('pasien'))->with('rumahSakits', $rumahSakits);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->only([
            'nama',
            'alamat',
            'email',
            'telepon',
            'rumah_sakit_id',
        ]);

        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('success', 'Data Pasien berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', 'Data Pasien berhasil dihapus!');
    }
}
