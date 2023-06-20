@extends('dashboard.layout.main')
@section('dashboard-page','Edit Buku')
@section('dashboard-buku','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/dashboard-buku/{{$bukus->id}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="kode" class="fs-6 fw-normal p-0 m-0">Kode</label>
                        <input type="text" class="form-control" name="kode" id="kode" placeholder="Masukkan kode" value="{{old('kode',$bukus->kode)}}">
                    </div>
                    <div class="form-group">
                        <label for="judul" class="fs-6 fw-normal p-0 m-0">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="{{old('judul',$bukus->judul)}}">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label fs-6 fw-normal p-0 m-0">Kategori</label>
                        <select class="form-select" name="kategori_id" aria-label="Default select example">
                            @foreach ($kategoris as $kategori)
                                @if (old('kategori_id',$bukus->kategori_id)==$kategori->id)
                                    <option value="{{$kategori->id}}" selected>{{$kategori->nama}}</option>
                                @else
                                    <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label fs-6 fw-normal p-0 m-0">Pengarang</label>
                        <select class="form-select" name="pengarang_id" aria-label="Default select example">
                            @foreach ($pengarangs as $pengarang)
                                @if (old('pengarang_id',$bukus->pengarang_id)==$pengarang->id)
                                <option value="{{$pengarang->id}}" selected>{{$pengarang->nama}}</option>
                                @else
                                    <option value="{{$pengarang->id}}">{{$pengarang->nama}}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label fs-6 fw-normal p-0 m-0">Penerbit</label>
                        <select class="form-select" name="penerbit_id" aria-label="Default select example">
                            @foreach ($penerbits as $penerbit)
                                @if (old('penerbit_id',$bukus->penerbit_id)==$penerbit->id)
                                <option value="{{$penerbit->id}}" selected>{{$penerbit->nama}}</option>
                                @else
                                    <option value="{{$penerbit->id}}">{{$penerbit->nama}}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        <div class="row">
                        <div class="col text-center">
                        </div>
                    </div>        
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection