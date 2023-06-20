<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.pegawai.index',[
            'pegawais'=>Pegawai::orderBy('jabatan_id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.pegawai.create',[
            'jabatans' => Jabatan::whereNotIn('id',['1','2'])->get()
        ]);
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jabatan_id' => 'required',
            'email' => 'required',
        ]);
        Pegawai::create($validatedData);
        return redirect('/dashboard/pegawai')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
        return view('dashboard.pegawai.edit',[
            'pegawais' => Pegawai::find($pegawai->id),
            'jabatans' => Jabatan::whereNotIn('id',['1','2'])->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'jabatan_id' => '',
            'email' => 'required',
        ]);
        Pegawai::where('id',$pegawai->id)->update($validatedData);
        return redirect('/dashboard/pegawai')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
        Pegawai::destroy($pegawai->id);
        return redirect('/dashboard/pegawai')->with('pesan-delete','Data berhasil dihapus');
    }
}
