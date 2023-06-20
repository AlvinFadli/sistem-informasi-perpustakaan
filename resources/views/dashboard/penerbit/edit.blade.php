@extends('dashboard.layout.main')
@section('dashboard-page','Edit Penerbit')
@section('dashboard-penerbit','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{url('dashboard/'.'penerbit/'.$penerbits->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="fs-6 fw-normal p-0 m-0">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{old('nama',$penerbits->nama)}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="fs-6 fw-normal p-0 m-0">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" value="{{old('alamat',$penerbits->alamat)}}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="fs-6 fw-normal p-0 m-0">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{old('email',$penerbits->email)}}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp" class="fs-6 fw-normal p-0 m-0">No. Telepon</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No. Telepon" value="{{old('no_telp',$penerbits->no_telp)}}">
                    </div>
                    <div class="form-group">
                        <label for="no_fax" class="fs-6 fw-normal p-0 m-0">No. Fax</label>
                        <input type="text" class="form-control" name="no_fax" id="no_fax" placeholder="Masukkan No. Fax" value="{{old('no_fax',$penerbits->no_fax)}}">
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection