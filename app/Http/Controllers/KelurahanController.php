<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data_kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('data_kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelurahan = new Kelurahan();
        $kelurahan->nama = $request->nama;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->save();
        return redirect('kelurahan');
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
    public function edit(string $id)
    {
        $data_kelurahan = Kelurahan::where('id', $id)->get();
        return view('kelurahan.edit', compact('data_kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $kelurahan = Kelurahan::find($request->id);
        $kelurahan->nama = $request->nama;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->save();
        return redirect('kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelurahan::where('id', $id)->delete();
        return redirect('kelurahan');

    }
}
