@extends('dashboard.layout.main')
@section('dashboard-page','Edit Jadwal')
@section('dashboard-jadwal','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{url('dashboard/'.'jadwal/'.$jadwals->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="catatan" class="fs-6 fw-normal p-0 m-0">Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" cols='50' placeholder="Buat catatan">{{old('catatan',$jadwals->catatan)}}</textarea>
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection