<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="icon" href="{{asset('assets/img/icon.png')}}">
    <title>SMKS Nusantara Banyuwangi| @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/navbar.css') }}">

    
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light md-col-11 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ "/" }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Bootstrap" width="200" height="80">
                  </a>              
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PROFIL
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ url('profil/sekolah') }}">Profil Sekolah</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      KESISWAAN
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ url('kesiswaan/ekstra') }}">Ekstrakulikuler</a></li>
                      <li><a class="dropdown-item" href="{{ url('kesiswaan/prestasi') }}">Prestasi Siswa</a></li>
                      <li><a class="dropdown-item" href="{{ url('kesiswaan/artikel') }}">Artikel</a></li>
                  
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PPDB
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="https://drive.google.com/drive/folders/1_rXOsIHzB5_vc35ixrtw-3L561TQ6prA?usp=sharing">Brosur PPDB</a></li>
                      <li><a class="dropdown-item" href="https://forms.gle/3oEcqJ8vXd4FdNCz7">Daftar</a></li>
                      <li><a class="dropdown-item" href="https://drive.google.com/file/d/1ErZVY1S1QtT4N2FKT4BEni9xzQps9RCi/view?usp=sharing">Juknis PPDB</a></li>
                      <li><a class="dropdown-item" href="https://drive.google.com/file/d/1_Ub5P-ZmNb0m7Rwc3PhTGfyz-YTkUtM9/view?usp=sharing">Pengumuman</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('kontak/kontaksmk') }}">KONTAK KAMI</a>
                  </li>

              </div>

              @if (Auth::check() == true)
                <div class="d-grid gap-2 d-md-flex justify-content-md-end md-col-5">
                        
                        <div class="dropdown">
                          <a class="btn  nama dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <b>{{ Auth::user()->name }}</b>
                          </a>                      
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('user/logout') }}">Log Out</a></li>

                          </ul>
                        </div>
              @else
                        <a class="btn btn-outline-light ms-1" href="{{ url('user/login') }}">Masuk</a>
                       
              @endif    
            </div>
          </nav>
        </div>
</head>
<body>

@yield('content')



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@include('sweetalert::alert')
</body>
</html>