@extends('dashboard.layout.main')
@section('dashboard-page','Tambah Penerbit')
@section('dashboard-penerbit','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/dashboard/penerbit" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="fs-6 fw-normal p-0 m-0">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="fs-6 fw-normal p-0 m-0">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" value="{{old('alamat')}}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="fs-6 fw-normal p-0 m-0">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp" class="fs-6 fw-normal p-0 m-0">No. Telepon</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No. Telepon" value="{{old('no_telp')}}">
                    </div>
                    <div class="form-group">
                        <label for="no_fax" class="fs-6 fw-normal p-0 m-0">No. Fax</label>
                        <input type="text" class="form-control" name="no_fax" id="no_fax" placeholder="Masukkan No. Fax" value="{{old('no_fax')}}">
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection