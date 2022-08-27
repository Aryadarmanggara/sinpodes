<?php

namespace App\Http\Controllers;

use App\Models\IdentitasDesa;
use Illuminate\Http\Request;

class AdminIdentitasDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas_desa = IdentitasDesa::first();
        return view('admin_kandes.identitas_desa.identitas_desa', compact('identitas_desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(IdentitasDesa $identitas_desa)
    {
        return view('admin_kandes.identitas_desa.edit', compact('identitas_desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required',
            'nama_kecamatan'  => 'required',
            'kabupaten'  => 'required',
            'provinsi'  => 'required',
            'kode_pos'  => 'required',
            'alamat'  => 'required',
            'nama_kepala_desa'  => 'required',
            'instagram'  => 'required',
            'facebook'  => 'required',
        ]);
        $identitas_desa = IdentitasDesa::find($id);
        $identitas_desa->nama_desa = $request->nama_desa;
        $identitas_desa->nama_kecamatan = $request->nama_kecamatan;
        $identitas_desa->kabupaten = $request->kabupaten;
        $identitas_desa->provinsi = $request->provinsi;
        $identitas_desa->kode_pos = $request->kode_pos;
        $identitas_desa->alamat = $request->alamat;
        $identitas_desa->nama_kepala_desa = $request->nama_kepala_desa;
        $identitas_desa->instagram = $request->instagram;
        $identitas_desa->facebook = $request->facebook;
        $identitas_desa->twitter = $request->twitter;
        $identitas_desa->save();
        return redirect()->route('identitas_desa.index')
            ->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
