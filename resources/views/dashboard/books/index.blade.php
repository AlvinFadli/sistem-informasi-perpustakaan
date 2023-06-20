@extends('dashboard.layout.main')
@section('dashboard-page','Buku')
@section('container')
    <div class="container">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <a href="dashboard-buku/create" class="btn bg-gradient-warning mb-3">Tambah Buku</a>
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
              <table class="table align-items-center mb-2">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">No.</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Kode</th>
                    <th class="text-uppercase text-body text-xxs font-weight-bolder">Judul</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Kategori</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Pengarang</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Penerbit</th>
                    <th class="text-center text-uppercase text-body text-xxs font-weight-bolder">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bukus as $buku)
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-xs font-weight-bold">{{$loop->iteration}}</span>
                    </td>
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
                    <td class="align-middle text-center">
                        <a href="/dashboard-buku/{{$buku->id}}/edit" class="btn bg-gradient-warning" style="padding: 8px 10px; margin:0"><i class="bi bi-pencil-square"></i></a>
                        <form action="/dashboard-buku/{{$buku->id}}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn bg-gradient-danger" style="padding: 8px 10px; margin:0" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="bi bi-trash"></i></button>
                        </form>
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