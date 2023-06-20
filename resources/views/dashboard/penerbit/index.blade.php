@extends('dashboard.layout.main')
@section('dashboard-page','Penerbit')
@section('container')
    <div class="container">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="penerbit/create" class="btn bg-gradient-warning mb-3">Tambah Penerbit</a>
      </div>
      <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
        @if (session()->has('pesan'))
          <div class="alert alert-success text-white font-weight-bolder" role="alert">
          {{session('pesan')}}
          </div>
        @elseif(session()->has('pesan-delete'))
          <div class="alert alert-danger text-white font-weight-bolder" role="alert">
          {{session('pesan-delete')}}
          </div>
        @endif
        </div>
        <div class="card">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">No.</th>
                    <th class="text-uppercase text-body text-xxs font-weight-bolder">Nama</th>
                    {{-- <th class="text-uppercase text-body text-xxs font-weight-bolder">Alamat</th> --}}
                    <th class="text-uppercase text-body text-xxs font-weight-bolder">E-mail</th>
                    <th class="text-uppercase text-body text-xxs font-weight-bolder">No. Telp</th>
                    <th class="text-uppercase text-body text-xxs font-weight-bolder">No. Fax</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Aksi</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($penerbits as $penerbit)
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{$loop->iteration}}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-xs font-weight-bold">{{$penerbit->nama}}</span>
                    </td>
                    {{-- <td class="align-middle">
                      <span class="text-xs font-weight-bold">{{$penerbit->alamat}}</span>
                    </td> --}}
                    <td class="align-middle">
                      <span class="text-xs font-weight-bold">{{$penerbit->email}}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-xs font-weight-bold">{{$penerbit->no_telp}}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-xs font-weight-bold">{{$penerbit->no_fax}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <a href="/dashboard/penerbit/{{$penerbit->id}}/edit" class="btn bg-gradient-warning" style="padding: 8px 10px; margin:0"><i class="bi bi-pencil-square"></i></a>
                      <form action="/dashboard/penerbit/{{$penerbit->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn bg-gradient-danger" style="padding: 8px 10px; margin:0" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="bi bi-trash"></i></button>
                      </form>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection