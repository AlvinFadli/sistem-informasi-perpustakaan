@extends('dashboard.layout.main')
@section('dashboard-page','Tambah Pegawai')
@section('dashboard-pegawai','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/dashboard/pegawai" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="fs-6 fw-normal p-0 m-0">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{old('nama')}}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis kelamin</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" {{old('jenis_kelamin')}} checked>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="fs-6 fw-normal p-0 m-0">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" value="{{old('alamat')}}">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label fs-6 fw-normal p-0 m-0">Kategori</label>
                        <select class="form-select" name="jabatan_id" aria-label="Default select example">
                            @foreach ($jabatans as $jabatan)
                                <option value="{{$jabatan->id}}" >{{$jabatan->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email" class="fs-6 fw-normal p-0 m-0">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{old('email')}}">
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection