<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Pegawai;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    //
    public function index(){
        $buku = Buku::all();
        $totalBuku = $buku->count();

        $penulis = Pengarang::all();
        $totalPenulis = $penulis->count();

        $penerbit = Penerbit::all();
        $totalPenerbit = $penerbit->count();
        
        $pegawai = Pegawai::all();
        $totalPegawai = $pegawai->count();

        $kategoris = Kategori::all();
        $bukuCategory = Buku::select(DB::raw("count(*) as jumlah"))
                            ->groupBy('kategori_id')
                            ->get();

        $pegawaiInti = Pegawai::whereIn('jabatan_id',['1','2'])->orderBy('jabatan_id')->get();
        return view('dashboard.index',[
            'totalBuku' => $totalBuku,
            'totalPenulis' => $totalPenulis,
            'totalPenerbit' => $totalPenerbit,
            'totalPegawai' => $totalPegawai,
            'kategoris' => $kategoris,
            'bukuCategory' => $bukuCategory,
            'pegawaiIntis' => $pegawaiInti
        ]);
    }
}
