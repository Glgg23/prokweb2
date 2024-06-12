<?php

namespace App\Http\Controllers;
use App\Models\Unit_kerja;
use Illuminate\Http\Request;

class Unit_kerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $data_unit_kerja = Unit_kerja::all();
        return view('unit_kerja.index', compact('data_unit_kerja'));

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
        $unit_kerja = new Unit_kerja();
        $unit_kerja->nama = $request->nama;
        $unit_kerja->save();
        return redirect('unit_kerja');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_unit_kerja = Unit_kerja::where('id', $id)->get();
        return view('unit_kerja.edit', compact('data_unit_kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $unit_kerja = Unit_kerja::find($request->id);
        $unit_kerja->nama = $request->nama;
        $unit_kerja->save();
        return redirect('unit_kerja');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Unit_kerja::where('id', $id)->delete();
        return redirect('unit_kerja');

    }
}
