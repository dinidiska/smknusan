@extends('layout.navbar')
@section('content')
@section('title', 'Dashboard')

<link rel="stylesheet" href="{{ asset('assets/utama.css') }}">

<center>
  <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/img/kepala.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/juara.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/expo.png') }}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</center>

<br></br>
<div class="container-fluid">
  <center><H2 class="text-success"><b>Kabar SMAKANTARA</b></H2></center> 
    <br></br>
  <div class="row">
    
    <div class="news-container">
      
      @foreach ($news as $newsItem)
          <div class="news-card">
              <img src="{{asset ($newsItem->image_url) }}" alt="News Image">
              <br></br>
              <div class="news-content">
                  <h5 class="news-title">{{ $newsItem->title }}</h5>
                  <p class="news-description">{{ $newsItem->description }}</p>
                 
              </div>
          </div>
      @endforeach
      
  </div>
  </div>
</div>

      <br> <br>
<div class="container-fluid">
  <center><H2 class="text-success"><b>Prestasi Siswa</b></H2></center> 
    <br></br>
  <div class="row">
   
    <br></br>

    <div class="news-container">
      @foreach ($prestasi as $item)
          <div class="news-card">
              <img src="{{ $item->image_url }}" alt="News Image">
              <br></br>
              <div class="news-content">
                  <h5 class="news-title">{{ $item->title }}</h5>
                  <p class="news-description">{{ $item->description }}</p>
                
              </div>
          </div>
      @endforeach
    </div>
  </div>
</div>

<br>
  <center>
    <iframe width="700" height="450" src="https://www.youtube.com/embed/N17JildklGU?controls=0" class="link-ytb"></iframe>
  </center>

<br><br>
<center><h2 class="text-success"><b>Kontak Kami</b></h2></center>
<br>

<div class="container-kontak">
  <div class="row">
    <div class="col">
      <div class="about-us">

        <h1 class='text-warning'>SMKS Nusantara Banyuwangi</h1>
        <p class='text-white'>Selamat datang di website resmi SMKS Nusantara Banyuwangi, terletak JL. K Mujahid Gunung Sari, Gn. Sari, Sambirejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487.</p>
        <div class="contact-info">
            <p class='text-white'><span class="icon">📍</span> JL. K Mujahid Gunung Sari, Gn. Sari, Sambirejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487</p>
            <p class='text-white'><span class="icon">📞</span> (0333) 3910297</p>
            <p class='text-white'><span class="icon">✉️</span> smknst_114@yahoo.co.id</p>
        </div>
      </div>
      
    </div>
    
    <div class="col">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15784.052338370535!2d114.1800486!3d-8.4981078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3f883ffffffff%3A0x9ad7d582e362cc08!2sSMK%20Nusantara%20Banyuwangi!5e0!3m2!1sid!2sid!4v1719926092210!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
  </div>

</div>
@endsection