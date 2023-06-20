@extends('dashboard.layout.main')
@section('dashboard-page','Edit Pegawai')
@section('dashboard-pegawai','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{url('dashboard/'.'pegawai/'.$pegawais->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="fs-6 fw-normal p-0 m-0">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{old('nama',$pegawais->nama)}}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis kelamin</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" {{old('jenis_kelamin',$pegawais->jenis_kelamin=='L' ? 'checked' : '')}} checked>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P" {{old('jenis_kelamin',$pegawais->jenis_kelamin=='P' ? 'checked' : '')}}>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="fs-6 fw-normal p-0 m-0">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" value="{{old('alamat',$pegawais->alamat)}}">
                    </div>
                    @if ($pegawais->jabatan_id != '1' && $pegawais->jabatan_id != '2')
                        <div class="mb-3">
                            <label for="judul" class="form-label fs-6 fw-normal p-0 m-0">Jabatan</label>
                            <select class="form-select" name="jabatan_id" aria-label="Default select example">
                                @foreach ($jabatans as $jabatan)
                                @if (old('jabatan_id',$pegawais->jabatan_id)==$jabatan->id)
                                    <option value="{{$jabatan->id}}" selected>{{$jabatan->nama}}</option>
                                @else
                                    <option value="{{$jabatan->id}}">{{$jabatan->nama}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="email" class="fs-6 fw-normal p-0 m-0">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{old('email',$pegawais->email)}}">
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection