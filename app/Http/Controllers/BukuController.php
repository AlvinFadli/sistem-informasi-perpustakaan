<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Pengarang;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.books.index',[
            'bukus'=>Buku::latest()->paginate(10),
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
        return view('dashboard.books.create',[
            'kategoris' => Kategori::all(),
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
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
            'kode' => 'required|max:10',
            'judul' => 'required|max:50',
            'kategori_id' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
        ]);
        Buku::create($validatedData);
        return redirect('/dashboard-buku')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
        return view('dashboard.books.edit',[
            'bukus' => Buku::find($buku->id),
            'kategoris' => Kategori::all(),
            'pengarangs' => Pengarang::all(),
            'penerbits' => Penerbit::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        //
        $validatedData = $request->validate([
            'kode' => 'required|max:10',
            'judul' => 'required|max:50',
            'kategori_id' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
        ]);
        Buku::where('id',$buku->id)->update($validatedData);
        return redirect('/dashboard-buku')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
        Buku::destroy($buku->id);
        return redirect('/dashboard-buku')->with('pesan-delete','Data berhasil dihapus');
    }
}
