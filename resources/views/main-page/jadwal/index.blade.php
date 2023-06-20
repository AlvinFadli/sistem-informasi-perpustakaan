@extends('main-page.layout.main')
@section('homepage-home','font-weight-bold')
@section('container')
    <div class="container mt-7">
      <div class="row align-items-center mt-8">
        <div class="col-lg-6 text-center">
            <img src="../images/homepage-jadwal-page.png" alt="" width="400px">
        </div>
        <div class="col-lg-6">
            <h1>Buka <span style="color: #f53939">Senin - Jum'at</span></h1>
            <h1>08.00 - <span style="color: #f53939">20.00</span></h1>
            @foreach ($jadwals as $jadwal)
              <p>* <i>{{$jadwal->catatan}}</i></p>
            @endforeach
        </div>
    </div>
    </div>
@endsection