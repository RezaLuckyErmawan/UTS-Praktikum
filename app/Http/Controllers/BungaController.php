<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $bungas = Bunga::get();
        return view('bungas.index', compact('bungas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('bunga/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required'
        ]);
        Bunga::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);
        return redirect()->route('bunga')->with(['success' => 'Data Berhasil Disimpan!']);
        //
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
    public function edit(string $id) : View
    {
        $bunga = Bunga::findorFail($id);
        return view('/bunga/edit', compact('bunga'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required'
        ]);

        $idbunga = Bunga::findorFail($id);

        $idbunga->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga
        ]);

        return redirect()->route('bunga')->with(['success'=> 'Data Berhasil Diedit!']);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
        $bunga = Bunga::findOrFail($id);

        $bunga->delete();

        return redirect()->route('bunga')->with(['success' => 'Data berhasil dihapus!']);
    }
}
