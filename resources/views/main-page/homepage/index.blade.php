@extends('main-page.layout.main')
@section('homepage-home','font-weight-bold')
@section('container')
    <div class="container" style="height: 90vh" >
        <div class="row align-items-center mt-8">
            <div class="col-lg-6">
                <h1>Sistem Informasi <span style="color: #f53939">Perpustakaan</span></h1>
            </div>
            <div class="col-lg-6 text-center">
                <img src="./images/homepage-jumbotron.png" alt="" width="400px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row my-5" data-aos="fade-right">
                <div class="col-10">
                    <div class="row gx-12 homepage-item">
                        <div class="col-xl-5">
                            <img src="./images/homepage-books.png" alt="" width="450px">
                        </div>
                        <div class="col-xl-7">
                            <h3>Buku</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, error ea, quibusdam saepe consequatur aspernatur rem exercitationem ex laudantium ipsam blanditiis totam.</p>
                            <a href="/homepage/book" class="btn bg-gradient-info">Go</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5 justify-content-md-end text-center-md" data-aos="fade-left" >
                <div class="col-8">
                    <div class="row gx-8 homepage-item">
                        <div class="col-xl-5" >
                            <img src="./images/homepage-pegawai.png" alt="" width="320px">
                        </div>
                        <div class="col-xl-7">
                            <h3>Pegawai</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, error ea, quibusdam saepe consequatur aspernatur rem exercitationem ex laudantium ipsam blanditiis totam.</p>
                            
                            <a href="/homepage/pegawai" class="btn bg-gradient-info">Go</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row my-5" data-aos="fade-right">
                <div class="col-8">
                    <div class="row gx-10 homepage-item">
                        <div class="col-xl-5">
                            <img src="./images/homepage-jadwal.png" alt="" width="340px">
                        </div>
                        <div class="col-xl-7">
                            <h3>Jadwal</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, error ea, quibusdam saepe consequatur aspernatur rem exercitationem ex laudantium ipsam blanditiis totam.</p>
                            <a href="/homepage/jadwal" class="btn bg-gradient-info">Go</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection