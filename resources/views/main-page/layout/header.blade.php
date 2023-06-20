<div class="container">
  <div class="row">
    <div class="col-12">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid pe-0">
          <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/homepage">
            Perpustakaan
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-book opacity-6 text-dark me-1"></i>
                  Buku
                </a>
                <ul class="dropdown-menu overflow-hidden" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/homepage/book">Daftar Buku</a></li>
                  <li><a class="dropdown-item" href="/homepage/penulis">Daftar Penulis</a></li>
                  <li><a class="dropdown-item" href="/homepage/penerbit">Daftar Penerbit</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2" href="/homepage/pegawai">
                  <i class="fa fa-user opacity-6 text-dark me-1"></i>
                  Pegawai
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-2" href="/homepage/jadwal">
                  <i class="fas fa-stopwatch opacity-6 text-dark me-1"></i>
                  Jadwal
                </a>
              </li>
              
            </ul>
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-sm btn-round mb-0 me-2 bg-gradient-warning" style="width: 120px" href="/login">Sign In</a>
            </li>
            {{-- <ul class="navbar-nav d-lg-block d-none">
              <li class="nav-item">
                <a href="https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Sign In</a>
              </li>
            </ul> --}}
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
  </div>
</div>

{{-- <header >
    <nav
  class="navbar navbar-expand-lg navbar-light bg-white py-2">
  <div class="container">
    <a class="nav-item  @yield('homepage-home')" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
        </svg>
      Home
    </a>
    <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarSupportedContent">
            <li class="nav-item">
                <a class="nav-link @yield('homepage-book')" href="/book">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Jadwal</a>
            </li>
        </ul>
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <div class="row">
            <button class="btn bg-gradient-warning my-1 me-1">Login</button>
        </div>
      </ul>
    </div>
  </div>
</nav>
</header> --}}

