@extends('dashboard.layout.main')
@section('dashboard-page','Tambah Penulis')
@section('dashboard-penulis','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{url('dashboard/'.'pengarang/'.$pengarangs->id)}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="fs-6 fw-normal p-0 m-0">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{old('nama',$pengarangs->nama)}}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis kelamin</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" {{old('jenis_kelamin',$pengarangs->jenis_kelamin=='L' ? 'checked' : '')}} checked>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P" {{old('jenis_kelamin',$pengarangs->jenis_kelamin=='P' ? 'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="fs-6 fw-normal p-0 m-0">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" value="{{old('alamat',$pengarangs->alamat)}}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="fs-6 fw-normal p-0 m-0">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{old('email',$pengarangs->email)}}">
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection