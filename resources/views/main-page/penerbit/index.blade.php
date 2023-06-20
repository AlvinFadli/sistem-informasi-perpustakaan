@extends('main-page.layout.main')
@section('homepage-home','font-weight-bold')
@section('container')
    <div class="container mt-7">
        <h3 class="text-center">Daftar Penerbit</h3>
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">Nama</th>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">Alamat</th>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">E-mail</th>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">No. Telp</th>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">No. Fax</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($penerbits as $penerbit)
                <tr>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$penerbit->nama}}</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$penerbit->alamat}}</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$penerbit->email}}</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$penerbit->no_telp}}</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$penerbit->no_fax}}</span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="px-3 pt-2">
              {{ $penerbits->links() }}
            </div>
          </div>
        </div>
    </div>
@endsection