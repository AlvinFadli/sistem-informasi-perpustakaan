@extends('dashboard.layout.main')
@section('dashboard-page','Tambah Jadwal')
@section('dashboard-jadwal','active')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/dashboard/jadwal" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="catatan" class="fs-6 fw-normal p-0 m-0">Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" cols='50' placeholder="Buat catatan">{{old('catatan')}}</textarea>
                    </div>
                    <button class="btn btn-success bg-gradient-success justify-content-center" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection