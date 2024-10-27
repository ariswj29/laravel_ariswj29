<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumahSakits = RumahSakit::all();
        return view('rumah-sakit.index', compact('rumahSakits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rumah-sakit.create');
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
        ]);

        RumahSakit::create($request->all());
        return redirect()->route('rumah-sakit.index')->with('success', 'Rumah Sakit berhasil ditambahkan!');
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
    public function edit(RumahSakit $rumahSakit)
    {
        return view('rumah-sakit.edit', compact('rumahSakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RumahSakit $rumahSakit)
    {
        $request->only([
            'nama',
            'alamat',
            'email',
            'telepon',
        ]);

        $rumahSakit->update($request->all());
        return redirect()->route('rumah-sakit.index')->with('success', 'Rumah Sakit berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RumahSakit $rumahSakit)
    {
        $rumahSakit->delete();
        return redirect()->route('rumah-sakit.index')->with('success', 'Rumah Sakit berhasil dihapus!');
    }
}
