<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use App\Models\Unit_kerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParamedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $list_paramedik = Paramedik::all();

        // return view('paramedik.index',['data_paramedik' => $list_paramedik]);

        $data_paramedik = DB::table('paramedik')->join('unit_kerja','paramedik.unit_kerja_id','=','unit_kerja.id')
        ->select('paramedik.*','unit_kerja.nama as nama_unit_kerja')
        ->get();

        $unit_kerjas = Unit_kerja::all();
        return view('paramedik.index', compact('data_paramedik','unit_kerjas'));
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
        $paramedik = new Paramedik();
        $paramedik->nama = $request->nama;
        $paramedik->gender = $request->gender;
        $paramedik->tmp_lahir = $request->tmp_lahir;
        $paramedik->tgl_lahir = $request->tgl_lahir;
        $paramedik->telepon = $request->telepon;
        $paramedik->alamat = $request->alamat;
        $paramedik->unit_kerja_id = $request->unit_kerja_id;
        $paramedik->save();
        return redirect('paramedik');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
