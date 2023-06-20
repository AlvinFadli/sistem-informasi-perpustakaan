<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.penerbit.index',[
            'penerbits'=>Penerbit::latest()->paginate(10)
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
        return view('dashboard.penerbit.create');
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
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'no_fax' => 'required',
        ]);
        Penerbit::create($validatedData);
        return redirect('/dashboard/penerbit')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        //
        return view('dashboard.penerbit.edit',[
            'penerbits' => Penerbit::find($penerbit->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'no_fax' => 'required',
        ]);
        Penerbit::where('id',$penerbit->id)->update($validatedData);
        return redirect('/dashboard/penerbit')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
        //
        Penerbit::destroy($penerbit->id);
        $check = Penerbit::find($penerbit->id);
        if($check){
            return redirect('/dashboard/penerbit')->with('pesan-delete','Data gagal dihapus karena penerbit masih memiliki buku yang terdata.');
        }
        return redirect('/dashboard/penerbit')->with('pesan-delete','Data berhasil dihapus');
    }
}
