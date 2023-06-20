@extends('main-page.layout.main')
@section('homepage-home','font-weight-bold')
@section('container')
    <div class="container mt-7">
        <h3 class="text-center">Daftar Penulis</h3>
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">Nama</th>
                  <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Jenis Kelamin</th>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">Alamat</th>
                  <th class="text-uppercase text-body text-xxs font-weight-bolder">E-mail</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pengarangs as $pengarang)
                <tr>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$pengarang->nama}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">{{$pengarang->jenis_kelamin}}</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$pengarang->alamat}}</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-xs font-weight-bold">{{$pengarang->email}}</span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="px-3 pt-2">
              {{ $pengarangs->links() }}
            </div>
          </div>
        </div>
    </div>
@endsection