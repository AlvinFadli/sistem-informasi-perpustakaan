@extends('dashboard.layout.main')
@section('dashboard-page','Dashboard')
@section('container')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8 text-center">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total buku</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$totalBuku}}
                  {{-- $53,000
                  <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                <i class="bi bi-journals text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8 text-center">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Penulis</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$totalPenulis}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                <i class="bi bi-person-fill text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8 text-center">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Penerbit</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$totalPenerbit}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                <i class="bi bi-building text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8 text-center">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pegawai</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$totalPegawai}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                <i class="bi bi-people-fill text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-lg-7 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <h4>Pembagian kategori buku</h4>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="chart-buku" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h4>Pengurus Inti</h4>
        </div>
        <div class="card-body p-3">
          <div class="">
            @foreach ($pegawaiIntis as $pegawaiInti)
              <div class="d-flex px-2 py-3">
                <div>
                  <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-{{$loop->iteration}}.jpg" class="avatar avatar-sm me-3">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-xs">{{$pegawaiInti->nama}}</h6>
                  <p class="text-xs text-secondary mb-0">{{$pegawaiInti->jabatan->nama}}</p>
                </div>
              </div>
            @endforeach
            {{-- <div class="d-flex px-2 py-3">
              <div>
                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">John Michael</h6>
                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
              </div>
            </div>
            <div class="d-flex px-2 py-3">
              <div>
                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">John Michael</h6>
                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="{{('assets/js/plugins/chartjs.min.js')}}"></script>
  
  
  <script>

    const labels = [<?php foreach ($kategoris as $kategori) { echo '"' . $kategori->nama . '",';}?>];

    const data = {
      labels: labels,
      datasets: [{
        label: 'Data buku berdasarkan kategori',
        backgroundColor: ['rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)',
      'rgb(255, 248, 10)',
      'rgb(254, 177, 57)',
      'rgb(214, 28, 78)',
      'rgb(41, 52, 98)'
      ],
        data: [<?php foreach ($bukuCategory as $buku) { echo '"' . $buku->jumlah . '",';}?>],
      }]
    };

    const config = {
      type: 'pie',
      data: data,
      options: {}
    };
  </script>
  
@endsection
    