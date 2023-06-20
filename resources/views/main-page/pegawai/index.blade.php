@extends('main-page.layout.main')
@section('homepage-home','font-weight-bold')
@section('container')
    <div class="container mt-7">
        <h3 class="text-center">Daftar Pegawai</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                <a href="">
                  <img class="w-100 border-radius-md" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-{{1}}.jpg">
                  <h5 class="mt-3 mb-1 d-md-block d-none">{{$ps[0]->nama}}</h5>
                  <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">{{$ps[0]->nama}}</p>
                  <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">{{$ps[0]->jabatan->nama}}</p>
                </a>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                <a href="">
                  <img class="w-100 border-radius-md" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-{{3}}.jpg">
                  <h5 class="mt-3 mb-1 d-md-block d-none">{{$manager[0]->nama}}</h5>
                  <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">{{$manager[0]->nama}}</p>
                  <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">{{$manager[0]->jabatan->nama}}</p>
                </a>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                <a href="">
                  <img class="w-100 border-radius-md" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-{{2}}.jpg">
                  <h5 class="mt-3 mb-1 d-md-block d-none">{{$ps[1]->nama}}</h5>
                  <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">{{$ps[1]->nama}}</p>
                  <p class="mb-0 text-xs font-weight-bolder text-warning text-gradient text-uppercase">{{$ps[1]->jabatan->nama}}</p>
                </a>
                </div>
            </div>
          </div>
          
        </div>
        <div class="card mt-5">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Kelamin</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pegawais as $pegawai)
                    <tr>
                      <td class="align-middle">
                        <span class="text-xs font-weight-bold">{{$pegawai->nama}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold">{{$pegawai->jenis_kelamin}}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-xs font-weight-bold">{{$pegawai->alamat}}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-xs font-weight-bold">{{$pegawai->jabatan->nama}}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-xs font-weight-bold">{{$pegawai->email}}</span>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- <div class="px-3 pt-2">
                {{ $pegawais->links() }}
              </div> --}}
            </div>
          </div>
    </div>
    
@endsection