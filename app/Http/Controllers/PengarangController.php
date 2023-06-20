<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.pengarang.index',[
            'pengarangs'=>Pengarang::latest()->paginate(10)
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
        return view('dashboard.pengarang.create');
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
            'email' => 'required',
        ]);
        Pengarang::create($validatedData);
        return redirect('/dashboard/pengarang')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function show(Pengarang $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengarang $pengarang)
    {
        //
        return view('dashboard.pengarang.edit',[
            'pengarangs' => Pengarang::find($pengarang->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengarang $pengarang)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);
        Pengarang::where('id',$pengarang->id)->update($validatedData);
        return redirect('/dashboard/pengarang')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengarang $pengarang)
    {
        //
        Pengarang::destroy($pengarang->id);
        $check = Pengarang::find($pengarang->id);
        if($check){
            return redirect('/dashboard/pengarang')->with('pesan-delete','Data gagal dihapus karena penulis masih memiliki buku yang terdata.');
        }
        return redirect('/dashboard/pengarang')->with('pesan-delete','Data berhasil dihapus');
    }
}
