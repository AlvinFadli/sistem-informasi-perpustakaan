@extends('main-page.layout.main')
@section('homepage-home','font-weight-bold')
@section('container')
    <div class="container mt-7">
        <h3 class="text-center">Daftar Buku</h3>
        <div class="card">
            <div class="table-responsive">
              <table class="table align-items-center mb-2">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Kode</th>
                    <th class="text-uppercase text-body text-xxs font-weight-bolder">Judul</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Kategori</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Pengarang</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Penerbit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bukus as $buku)
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{$buku->kode}}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-xs font-weight-bold">{{$buku->judul}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{$buku->kategori->nama}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{$buku->pengarang->nama}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{$buku->penerbit->nama}}</span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="px-3 pt-2">
                {{ $bukus->links() }}
              </div>
            </div>
          </div>
    </div>
@endsection